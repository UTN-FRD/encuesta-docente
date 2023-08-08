<?php
/* @var $this AsignaturasController */
/* @var $model Asignaturas */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
//	array('label'=>'List Asignaturas', 'url'=>array('index')),
	array('label'=>'Crear Asignatura', 'url'=>array('create')),
//	array('label'=>'View Asignaturas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Ver Asignaturas', 'url'=>array('admin')),
);
?>

<h1>Modificar Asignatura <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>