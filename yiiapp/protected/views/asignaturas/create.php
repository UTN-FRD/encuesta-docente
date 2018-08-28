<?php
/* @var $this AsignaturasController */
/* @var $model Asignaturas */

$this->breadcrumbs=array(
	'Asignaturases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Asignaturas', 'url'=>array('index')),
	array('label'=>'Manage Asignaturas', 'url'=>array('admin')),
);
?>

<h1>Create Asignaturas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>