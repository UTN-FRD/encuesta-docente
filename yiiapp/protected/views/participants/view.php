<?php
/* @var $this ParticipantsController */
/* @var $model Participants */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->participant_id,
);

$this->menu=array(
	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Create Alumnos', 'url'=>array('create')),
	array('label'=>'Update Alumnos', 'url'=>array('update', 'id'=>$model->participant_id)),
	array('label'=>'Delete Alumnos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->participant_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>View Participants #<?php echo $model->participant_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'participant_id',
		'firstname',
		'lastname',
		'email',
		'language',
		'blacklisted',
		'owner_uid',
		'created_by',
		'created',
		'modified',
		'dni',
		'legajo',
		'anio_ingreso',
		'especialidad_plan',
		'carrera_id',
	),
)); ?>
