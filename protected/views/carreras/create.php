<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'List Carreras', 'url'=>array('index')),
	array('label'=>'Ver Carreras', 'url'=>array('admin')),
);
?>

<h1>Crear Carrera</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>