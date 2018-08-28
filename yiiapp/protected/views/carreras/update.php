<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carrerases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Carreras', 'url'=>array('index')),
	array('label'=>'Create Carreras', 'url'=>array('create')),
	array('label'=>'View Carreras', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Carreras', 'url'=>array('admin')),
);
?>

<h1>Update Carreras <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>