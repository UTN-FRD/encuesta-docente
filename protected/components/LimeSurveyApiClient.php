<?php

class LimeSurveyApiClient
{
    private $endpoint;
    private $user;
    private $pass;
    private $sessionKey = null;

    public function __construct()
    {
        $this->endpoint = rtrim(Yii::app()->params['lsEndpoint'], '/');
        $this->user     = Yii::app()->params['lsApiUser'];
        $this->pass     = Yii::app()->params['lsApiPass'];
    }

    private function callWith($method, $params = [])
    {
        $payload = json_encode(['method'=>$method, 'params'=>$params, 'id'=>1]);
        $ch = curl_init($this->endpoint);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER     => ['Content-Type: application/json'],
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => $payload,
            CURLOPT_TIMEOUT        => 30,
        ]);
        $resp = curl_exec($ch);
        if ($resp === false) {
            throw new Exception('LS API error: ' . curl_error($ch));
        }
        $json = json_decode($resp, true);
        if (isset($json['error']) && $json['error']) {
            throw new Exception('LS API error: ' . ($json['error']['message'] ?? 'unknown'));
        }
        return $json['result'];
    }

    private $didRetry = false;
    private function call($method, $params=[])
    {
        $resp = $this->callWith($method, $params);
        // si la API devolviera “Invalid session key”, renovamos 1 vez
        if (is_array($resp) && isset($resp['status']) && stripos($resp['status'],'Invalid session key') !== false && !$this->didRetry) {
            $this->didRetry = true;
            $this->sessionKey = null;
            Yii::app()->cache->delete('ls_session_key');
            $this->login();
            // reintenta con la nueva key si corresponde
            if ($method !== 'get_session_key' && isset($params[0])) $params[0] = $this->sessionKey;
            return $this->callWith($method, $params);
        }
        $this->didRetry = false;
        return $resp;
    }

    public function login()
    {
        if ($this->sessionKey) return $this->sessionKey;

        $cacheKey = 'ls_session_key';
        $sk = Yii::app()->cache->get($cacheKey);
        if ($sk) { $this->sessionKey = $sk; return $sk; }

        $params = [$this->user, $this->pass];
        if (isset(Yii::app()->params['lsAuthPlugin']) && Yii::app()->params['lsAuthPlugin'])
            $params[] = Yii::app()->params['lsAuthPlugin'];

        $sk = $this->call('get_session_key', $params);
        // guarda ~9 min para no pedirla en cada request
        Yii::app()->cache->set($cacheKey, $sk, 540);
        return $this->sessionKey = $sk;
    }


    public function logout()
    {
        if ($this->sessionKey) {
            $this->call('release_session_key', [$this->sessionKey]);
            $this->sessionKey = null;
        }
    }

    public function listGroups($sid, $lang = 'es')
    {
        $sk = $this->login();
        return $this->call('list_groups', [$sk, (int)$sid, $lang]);
    }

    public function listQuestions($sid, $gid = null, $lang = null)
    {
        $sk = $this->login();
        $params = [$sk, (int)$sid];
        if ($gid !== null)   { $params[] = (int)$gid; }
        if ($lang !== null)  { $params[] = $lang; }
        return $this->call('list_questions', $params);
    }

    public function getQuestionProperties($qid, $props = [], $lang = 'es')
    {
        $sk = $this->login();
        return $this->call('get_question_properties', [$sk, (int)$qid, $props, $lang]);
    }

    public function addResponse($sid, array $data, $force = true, $token = null)
    {
        $sk = $this->login();
        // add_response: [sk, sid, responseData, sForce? ("true"/bool), token?]
        $params = [$sk, (int)$sid, $data, $force];
        if ($token) $params[] = $token;
        return $this->call('add_response', $params);
    }

    public function getSurveyProperties($sid, array $props = ['language','additional_languages','active'])
    {
        $sk = $this->login();
        return $this->call('get_survey_properties', [$sk, (int)$sid, $props]);
    }

    public function normalizeLang($lang)
    {
        // Normaliza cosas típicas: 'es_AR' -> 'es-AR', 'ES' -> 'es'
        $lang = str_replace('_','-',$lang);
        $lang = strtolower(substr($lang,0,2)) . (strlen($lang)>2 ? substr($lang,2) : '');
        return $lang;
    }

}
