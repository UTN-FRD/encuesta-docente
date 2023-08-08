<?php
/* @var $this TokensController */
/* @var $model Tokens */

$this->breadcrumbs=array(
	'Tokens'=>array('index'),
	$model->tid,
);

$this->menu=array(
	array('label'=>'List Tokens', 'url'=>array('index')),
	array('label'=>'Create Tokens', 'url'=>array('create')),
	array('label'=>'Update Tokens', 'url'=>array('update', 'id'=>$model->tid)),
	array('label'=>'Delete Tokens', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tokens', 'url'=>array('admin')),
);
?>

<h1>View Tokens #<?php echo $model->tid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tid',
		'participant_id',
		'firstname',
		'lastname',
		'email',
		'emailstatus',
		'token',
		'language',
		'blacklisted',
		'sent',
		'remindersent',
		'remindercount',
		'completed',
		'usesleft',
		'validfrom',
		'validuntil',
		'mpid',
	),
)); ?>
