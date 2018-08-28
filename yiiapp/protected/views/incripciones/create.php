<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */

$this->breadcrumbs=array(
	'Incripciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Incripciones', 'url'=>array('index')),
	array('label'=>'Manage Incripciones', 'url'=>array('admin')),
);
?>

<h1>Create Incripciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>