<?php
/* @var $this AsignaturaProfesorController */
/* @var $model AsignaturaProfesor */

$this->breadcrumbs=array(
	'Profesores por Asignatura'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
//	array('label'=>'List AsignaturaProfesor', 'url'=>array('index')),
	array('label'=>'Crear Asignatura-Profesor', 'url'=>array('create')),
//	array('label'=>'View AsignaturaProfesor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Ver Asignatura-Profesor', 'url'=>array('admin')),
);
?>

<h1>Modificar AsignaturaProfesor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>