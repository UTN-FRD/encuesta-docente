<?php
/* @var $this AsignaturaProfesorController */
/* @var $model AsignaturaProfesor */

$this->breadcrumbs=array(
	'Asignatura Profesors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AsignaturaProfesor', 'url'=>array('index')),
	array('label'=>'Create AsignaturaProfesor', 'url'=>array('create')),
	array('label'=>'View AsignaturaProfesor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AsignaturaProfesor', 'url'=>array('admin')),
);
?>

<h1>Update AsignaturaProfesor <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>