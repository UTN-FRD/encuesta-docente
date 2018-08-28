<?php
/* @var $this AsignaturaProfesorController */
/* @var $model AsignaturaProfesor */

$this->breadcrumbs=array(
	'Asignatura Profesors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AsignaturaProfesor', 'url'=>array('index')),
	array('label'=>'Create AsignaturaProfesor', 'url'=>array('create')),
	array('label'=>'Update AsignaturaProfesor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AsignaturaProfesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AsignaturaProfesor', 'url'=>array('admin')),
);
?>

<h1>View AsignaturaProfesor #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'asignatura_id',
		'profesor_id',
		'id',
	),
)); ?>
