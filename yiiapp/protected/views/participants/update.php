<?php
/* @var $this ParticipantsController */
/* @var $model Participants */

$this->breadcrumbs=array(
	'Participants'=>array('index'),
	$model->participant_id=>array('view','id'=>$model->participant_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Participants', 'url'=>array('index')),
	array('label'=>'Create Participants', 'url'=>array('create')),
	array('label'=>'View Participants', 'url'=>array('view', 'id'=>$model->participant_id)),
	array('label'=>'Manage Participants', 'url'=>array('admin')),
);
?>

<h1>Update Participants <?php echo $model->participant_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>