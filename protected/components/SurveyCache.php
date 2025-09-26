<?php

class SurveyCache
{
    public static function getStructure($sid, $lang = null)
    {
        $api = new LimeSurveyApiClient();

        // 0) Descubrir idioma base de la encuesta
        $props = $api->getSurveyProperties($sid, ['language','additional_languages']);
        $baseLang = isset($props['language']) ? $api->normalizeLang($props['language']) : 'en';
        $extra    = isset($props['additional_languages']) ? $props['additional_languages'] : '';
        // Algunos LS3 devuelven CSV, otros array; normalizamos a array de strings
        if (is_string($extra) && strlen($extra)) {
            $extraLangs = array_map([$api,'normalizeLang'], array_map('trim', explode(' ', str_replace([',',';'], ' ', $extra))));
        } elseif (is_array($extra)) {
            $extraLangs = array_map([$api,'normalizeLang'], $extra);
        } else {
            $extraLangs = [];
        }

        // Lang elegido: el que pidió el caller o el base
        $langChosen = $lang ? $api->normalizeLang($lang) : $baseLang;

        // Cache key según lang elegido
        $key = "survey_struct_{$sid}_{$langChosen}";
        $data = Yii::app()->cache->get($key);
        if ($data) return $data;

        // 1) Traer grupos (en lang elegido). Si viene vacío, probar con baseLang.
        $groups = $api->listGroups($sid, $langChosen);
        if (!is_array($groups) || empty($groups)) {
            if ($langChosen !== $baseLang) {
                $groups = $api->listGroups($sid, $baseLang);
                $langChosen = $baseLang; // forzamos base si el pedido no funcionó
            }
            if (!is_array($groups)) $groups = [];
        }

        // 2) Traer preguntas (por grupo, LS3 es más feliz así)
        $questions = [];
        foreach ($groups as $g) {
            if (!isset($g['gid'])) continue;
            $gid = (int)$g['gid'];
            $qs = $api->listQuestions($sid, $gid, $langChosen);
            if (is_array($qs)) {
                $questions = array_merge($questions, $qs);
            }
        }

        // Fallback extremo: si no hay preguntas, intentá sin lang explícito
        if (empty($questions)) {
            foreach ($groups as $g) {
                if (!isset($g['gid'])) continue;
                $gid = (int)$g['gid'];
                $qs = $api->listQuestions($sid, $gid, null);
                if (is_array($qs)) $questions = array_merge($questions, $qs);
            }
        }

        // 3) Indexar por parent_qid
        $byParent = [0 => []];
        foreach ($questions as $q) {
            $parent = isset($q['parent_qid']) ? (int)$q['parent_qid'] : 0;
            if (!isset($byParent[$parent])) $byParent[$parent] = [];
            $byParent[$parent][] = $q;
        }

        $data = [
            'langUsed'  => $langChosen,
            'groups'    => $groups,
            'byParent'  => $byParent,
            'questions' => $questions,
        ];
        Yii::app()->cache->set($key, $data, Yii::app()->params['cacheTtl']);

        // (debug opcional en logs del server)
        error_log("FastEntry {$sid} lang={$langChosen} groups=".count($groups)." questions=".count($questions));

        return $data;
    }
}
