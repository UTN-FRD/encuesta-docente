<?php
/* @var $this AsignaturasController */
/* @var $model Asignaturas */

$this->breadcrumbs=array(
	'Asignaturases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Asignaturas', 'url'=>array('index')),
	array('label'=>'Create Asignaturas', 'url'=>array('create')),
	array('label'=>'View Asignaturas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Asignaturas', 'url'=>array('admin')),
);
?>

<h1>Update Asignaturas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>