<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h2>Encuestas pendientes de completar</h2>

<div>
<?php
$usuario = Yii::app()->user->name;
//$usuario = "38433483";
$idUsuario = Participants::model()->findAllByAttributes(array('dni'=>$usuario));
$idUsuario = min(array_column($idUsuario,'participant_id'));
$asignaturas = Incripciones::model()->findAllByAttributes(array('participant_id'=>$idUsuario));
$idAsignaturas = array_column($asignaturas,'asignatura_id');
$asignaturaProfesor = AsignaturaProfesor::model()->findAllByAttributes(array('asignatura_id'=>$idAsignaturas));
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
        echo CHtml::button('Materia: '.$asignatura.' de: '.$profesor,array("class"=>"btn btn-primary btn-large", "style"=>"width:100%;margin:5px")); ?>
<?php } ?>

</div>