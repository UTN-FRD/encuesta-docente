<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'List Profesores', 'url'=>array('index')),
	array('label'=>'Ver Profesores', 'url'=>array('admin')),
);
?>

<h1>Crear Profesor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>