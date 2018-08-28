<?php
/* @var $this ParticipantsController */
/* @var $model Participants */

$this->breadcrumbs=array(
	'Participants'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Participants', 'url'=>array('index')),
	array('label'=>'Manage Participants', 'url'=>array('admin')),
);
?>

<h1>Create Participants</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>