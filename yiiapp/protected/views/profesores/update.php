<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profesores', 'url'=>array('index')),
	array('label'=>'Create Profesores', 'url'=>array('create')),
	array('label'=>'View Profesores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Profesores', 'url'=>array('admin')),
);
?>

<h1>Update Profesores <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>