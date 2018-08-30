<?php
/* @var $this ParticipantsController */
/* @var $model Participants */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->participant_id=>array('view','id'=>$model->participant_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Create Alumnos', 'url'=>array('create')),
	array('label'=>'View Alumnos', 'url'=>array('view', 'id'=>$model->participant_id)),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>Update Participants <?php echo $model->participant_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>