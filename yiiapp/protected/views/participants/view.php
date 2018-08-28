<?php
/* @var $this ParticipantsController */
/* @var $model Participants */

$this->breadcrumbs=array(
	'Participants'=>array('index'),
	$model->participant_id,
);

$this->menu=array(
	array('label'=>'List Participants', 'url'=>array('index')),
	array('label'=>'Create Participants', 'url'=>array('create')),
	array('label'=>'Update Participants', 'url'=>array('update', 'id'=>$model->participant_id)),
	array('label'=>'Delete Participants', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->participant_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Participants', 'url'=>array('admin')),
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
