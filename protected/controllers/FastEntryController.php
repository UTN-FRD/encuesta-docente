<?php

class FastEntryController extends Controller
{
    public $layout = 'column1'; // o el que uses

    public function actionIndex($sid, $lang = 'es-AR', $token = null)
    {
        $struct = SurveyCache::getStructure($sid, $lang);
        $this->render('index', [
        'sid'=>$sid,
        'lang'=>$struct['langUsed'], // muestra el que realmente se usó
        'token'=>$token,
        'groups'=>$struct['groups'],
        'byParent'=>$struct['byParent'],
        ]);
    }

    public function actionSubmit()
    {
        $sid   = (int)Yii::app()->request->getPost('sid');
        $lang  = Yii::app()->request->getPost('lang', 'es-AR');
        $token = Yii::app()->request->getPost('token', null);

        $payload = Yii::app()->request->getPost('resp', []);
        // $payload ya debe venir como ['SGQA' => 'valor', ...]

        // Filtrar vacíos si no querés enviar nulls
        $data = array_filter($payload, function($v) { return $v !== '' && $v !== null; });

        try {
            $api = new LimeSurveyApiClient();
            $result = $api->addResponse($sid, $data, true, $token);
            Yii::app()->user->setFlash('success', 'Respuesta grabada. ID: '.print_r($result, true));
        } catch (Exception $e) {
            Yii::app()->user->setFlash('error', 'Error al grabar: '.$e->getMessage());
        }
        $this->redirect(['index', 'sid'=>$sid, 'lang'=>$lang, 'token'=>$token]);
    }
}
