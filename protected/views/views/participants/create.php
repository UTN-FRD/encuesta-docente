<?php
/* @var $this ParticipantsController */
/* @var $model Participants */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Ver Alumnos', 'url'=>array('admin')),
);
?>

<h1>Crear Alumno</h1>

<?php $this->renderPartial('_formUpdate', array('model'=>$model)); ?>