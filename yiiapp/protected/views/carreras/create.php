<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carrerases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Carreras', 'url'=>array('index')),
	array('label'=>'Manage Carreras', 'url'=>array('admin')),
);
?>

<h1>Create Carreras</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>