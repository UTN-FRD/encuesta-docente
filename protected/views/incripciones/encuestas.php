<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h2 id="encuesta">Encuestas pendientes de completar</h2>

<div>
<?php
$usuario = Yii::app()->user->name;

$idUsuario = Participants::model()->findAllByAttributes(array('dni'=>$usuario));

$asignaturas = array();
$anio_academico = date('Y');
foreach(array_column($idUsuario,'participant_id') as $idTemp)
{

        $asignaturas = array_merge($asignaturas, Incripciones::model()->findAllByAttributes(array('participant_id'=>$idTemp, 'anio_academico'=>$anio_academico)) );
}

$idAsignaturas = array_column($asignaturas,'asignatura_id');
$asignaturaProfesor = AsignaturaProfesor::model()->findAllByAttributes(array('asignatura_id'=>$idAsignaturas));
$url = Yii::app()->request->baseUrl;
foreach($asignaturaProfesor as $elemento){

        $profesor = $elemento->profesor_id;
        $profesor = Profesores::model()->findByAttributes(array('id'=>$profesor));
        $profesor = $profesor->nombre;

        $asignatura = $elemento->asignatura_id;
        $asignatura = Asignaturas::model()->findByAttributes(array('id'=>$asignatura));
        $asignatura = $asignatura->descripcion;

        $cargo = $elemento->cargo;

        $asignaturaProfesorId = $elemento->id;
        $tokennro = $asignaturaProfesorId.$usuario;
        $token = str_replace(array('0','1','2','3','4','5','6','7','8','9'),array('A','S','D','F','G','H','J','K','L','Z'),$tokennro);
        $token2 = str_replace(array('0','1','2','3','4','5','6','7','8','9'),array('A','S','D','F','G','H','J','K','L','Z'),$tokennro);

        $encuesta = Yii::app()->params[$cargo];
        Tokens::model()->helperVar = $encuesta;
        Tokens::model()->refreshMetaData();

        if ($cargo) {
                if (Tokens::model()->findAllByAttributes(array('token'=>$token2))===array()) {
                        if (Tokens::model()->findAllByAttributes(array('token'=>$token))===array()) {
                                $newToken=new Tokens;
                                $newToken->token=$token2;
                                $newToken->save();
                                $token = $token2;
                        } else {
                                if ((Tokens::model()->findByAttributes(array('token'=>$token)))->usesleft==='1') {
                                        $tokenId = (Tokens::model()->findByAttributes(array('token'=>$token)))->tid;
                                        Tokens::model()->findByPk($tokenId)->delete();
                                        
                                        $newToken=new Tokens;
                                        $newToken->token=$token2;
                                        $newToken->save();
                                        $token = $token2;
                                }
                        }
                } else {
                        $token = $token2;
                }
                
                if ((Tokens::model()->findByAttributes(array('token'=>$token)))->usesleft==='1') {
                        echo CHtml::button(
                                'Materia: '.$asignatura.'. Profesor: '.$profesor.'. Cargo: '.$cargo,
                                array(
                                        'class'=>"btn btn-primary btn-large", 
                                        "style"=>"width:100%; height:100%; margin: 5px; white-space: normal",
                                        'onclick'=>"window.open(`{$url}/admin/index.php/{$encuesta}?token={$token}&ap={$asignaturaProfesorId}`,`_self`)",
                                )
                        );
                }
                if ((Tokens::model()->findByAttributes(array('token'=>$token)))->usesleft==='0') {
                        echo CHtml::htmlButton(
                                'Materia: '.$asignatura.'. Profesor: '.$profesor.'. Cargo: '.$cargo . ' <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>',
                                array(
                                        'class'=>"btn btn-light btn-large", 
                                        "style"=>"width:100%; height:100%; margin: 5px; white-space: normal",
                                )
                        );
                }
        }
} 

header("Refresh:60");?>

</div>