<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */

$this->breadcrumbs=array(
	'Inscripciones'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
//	array('label'=>'List Incripciones', 'url'=>array('index')),
	array('label'=>'Nueva Inscripcion', 'url'=>array('create')),
//	array('label'=>'View Incripciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Ver Inscripciones', 'url'=>array('admin')),
);
?>

<h1>Modificar Inscripciones <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>