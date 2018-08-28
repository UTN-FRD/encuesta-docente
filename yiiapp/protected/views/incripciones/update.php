<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */

$this->breadcrumbs=array(
	'Incripciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Incripciones', 'url'=>array('index')),
	array('label'=>'Create Incripciones', 'url'=>array('create')),
	array('label'=>'View Incripciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Incripciones', 'url'=>array('admin')),
);
?>

<h1>Update Incripciones <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>