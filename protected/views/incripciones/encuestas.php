<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h2 id="encuesta">Encuestas pendientes de completar</h2>

<div>
<?php
$usuario = Yii::app()->user->name;
//$usuario = "40235174";
$idUsuario = Participants::model()->findAllByAttributes(array('dni'=>$usuario));

$asignaturas = array();
foreach(array_column($idUsuario,'participant_id') as $idTemp)
{

        $asignaturas = array_merge($asignaturas, Incripciones::model()->findAllByAttributes(array('participant_id'=>$idTemp)) );
}

$idAsignaturas = array_column($asignaturas,'asignatura_id');
$asignaturaProfesor = AsignaturaProfesor::model()->findAllByAttributes(array('asignatura_id'=>$idAsignaturas));
$token=min(array_column($idUsuario,'participant_id'));
$token = str_replace(array('0','1','2','3','4','5','6','7','8','9'),array('a','b','c','d','e','f','g','h','i','j'), $token);
if (Tokens::model()->findAllByAttributes(array('token'=>$token))===array()) {
        $newToken=new Tokens;
        $newToken->token=$token;
        $newToken->save();
}
foreach($asignaturaProfesor as $elemento){ ?>
        <?php
        $asignatura = implode(array_column(array($elemento),'asignatura_id'));
        $profesor = implode(array_column(array($elemento),'profesor_id'));
        $profesor = Profesores::model()->findAllByAttributes(array('id'=>$profesor));
        $profesor = array_column($profesor,'nombre');
        $profesor = implode($profesor);
        $asignatura = Asignaturas::model()->findAllByAttributes(array('id'=>$asignatura));
        $asignatura = array_column($asignatura,'descripcion');
        $asignatura = implode($asignatura);
        echo CHtml::button(
                'Materia: '.$asignatura.' de: '.$profesor,
                array(
                        'class'=>"btn btn-primary btn-large", "style"=>"width:100%; height:100%; margin: 5px; white-space: normal",
                        'onclick'=>"window.open(`//localhost/encuesta-docente/limesurvey/index.php/164846?token={$token}`)",
                )
        );
        ?>
<?php } ?>

</div>