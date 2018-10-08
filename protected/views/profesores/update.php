<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */

$this->breadcrumbs=array(
	'Profesores'=>array('update'),
	$model->nombre=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
//	array('label'=>'List Profesores', 'url'=>array('index')),
	array('label'=>'Crear Profesor', 'url'=>array('create')),
//	array('label'=>'View Profesores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Ver Profesores', 'url'=>array('admin')),
);
?>

<h1>Modificar Profesor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>