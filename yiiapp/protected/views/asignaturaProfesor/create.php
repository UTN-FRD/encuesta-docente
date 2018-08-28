<?php
/* @var $this AsignaturaProfesorController */
/* @var $model AsignaturaProfesor */

$this->breadcrumbs=array(
	'Asignatura Profesors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AsignaturaProfesor', 'url'=>array('index')),
	array('label'=>'Manage AsignaturaProfesor', 'url'=>array('admin')),
);
?>

<h1>Create AsignaturaProfesor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>