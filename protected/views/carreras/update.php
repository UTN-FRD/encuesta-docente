<?php
/* @var $this CarrerasController */
/* @var $model Carreras */

$this->breadcrumbs=array(
	'Carreras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
//	array('label'=>'List Carreras', 'url'=>array('index')),
	array('label'=>'Nueva Carrera', 'url'=>array('create')),
//	array('label'=>'View Carreras', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Ver Carreras', 'url'=>array('admin')),
);
?>

<h1>Modificar Carreras <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>