<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */

$this->breadcrumbs=array(
	'Inscripciones'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'List Incripciones', 'url'=>array('index')),
	array('label'=>'Ver Incripciones', 'url'=>array('admin')),
);
?>

<h1>Crear Inscripciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>