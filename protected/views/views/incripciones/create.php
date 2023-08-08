<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */

$this->breadcrumbs=array(
	'Inscripciones'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'List Incripciones', 'url'=>array('index')),
	array('label'=>'Ver Inscripciones', 'url'=>array('admin')),
);
?>

<h1>Crear Inscripci&oacute;n</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>