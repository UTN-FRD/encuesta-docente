<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */

$this->breadcrumbs=array(
	'Incripciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Incripciones', 'url'=>array('index')),
	array('label'=>'Create Incripciones', 'url'=>array('create')),
	array('label'=>'Update Incripciones', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Incripciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Incripciones', 'url'=>array('admin')),
);
?>

<h1>View Incripciones #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'participant_id',
		'asignatura_id',
		'anio_academico',
		'comentarios',
	),
)); ?>
