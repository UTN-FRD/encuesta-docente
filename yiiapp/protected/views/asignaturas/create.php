<?php
/* @var $this AsignaturasController */
/* @var $model Asignaturas */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	'Crear',
);

$this->menu=array(
//	array('label'=>'List Asignaturas', 'url'=>array('index')),
	array('label'=>'Ver Asignaturas', 'url'=>array('admin')),
);
?>

<h1>Crear Asignaturas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>