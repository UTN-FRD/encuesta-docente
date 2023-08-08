<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Profesores', 'url'=>array('index')),
	array('label'=>'Create Profesores', 'url'=>array('create')),
	array('label'=>'Update Profesores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Profesores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profesores', 'url'=>array('admin')),
);
?>

<h1>View Profesores #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'cargo',
		'legajo',
		'dni',
		'fecha_ingreso',
	),
)); ?>
