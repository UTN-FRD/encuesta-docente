<?php
/* @var $this ParticipantsController */
/* @var $model Participants */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->participant_id=>array('view','id'=>$model->participant_id),
	'Modificar',
);

$this->menu=array(
//	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Crear Alumno', 'url'=>array('create')),
//	array('label'=>'View Alumnos', 'url'=>array('view', 'id'=>$model->participant_id)),
	array('label'=>'Ver Alumnos', 'url'=>array('admin')),
);
?>

<h1>Modificar Alumno</h1>

<?php $this->renderPartial('_formUpdate', array('model'=>$model)); ?>