<?php
/* @var $this departamentosController */
/* @var $model departamentos */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'List Departamentos', 'url'=>array('index')),
	array('label'=>'Ver Departamentos', 'url'=>array('admin')),
);
?>

<h1>Crear Departamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>