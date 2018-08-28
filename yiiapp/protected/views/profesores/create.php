<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Profesores', 'url'=>array('index')),
	array('label'=>'Manage Profesores', 'url'=>array('admin')),
);
?>

<h1>Create Profesores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>