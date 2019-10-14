<?php
/* @var $this departamentosController */
/* @var $model departamentos */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Modificar',
);

$this->menu=array(
//	array('label'=>'List Departamentos', 'url'=>array('index')),
	array('label'=>'Crear Departamento', 'url'=>array('create')),
//	array('label'=>'View Departamentos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Ver Departamento', 'url'=>array('admin')),
);
?>

<h1>Modificar Departamento <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>