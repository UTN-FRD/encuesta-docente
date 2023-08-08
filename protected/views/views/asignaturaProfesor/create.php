<?php
/* @var $this AsignaturaProfesorController */
/* @var $model AsignaturaProfesor */

$this->breadcrumbs=array(
	'Profesores por Asignatura'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'List AsignaturaProfesor', 'url'=>array('index')),
	array('label'=>'Ver Asignatura-Profesor', 'url'=>array('admin')),
);
?>

<h1>Crear Asignatura-Profesor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>