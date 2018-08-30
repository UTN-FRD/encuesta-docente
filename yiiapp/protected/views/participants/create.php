<?php
/* @var $this ParticipantsController */
/* @var $model Participants */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>Create Alumnos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>