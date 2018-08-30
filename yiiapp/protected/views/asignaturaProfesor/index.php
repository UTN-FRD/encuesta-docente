<?php
/* @var $this AsignaturaProfesorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profesores por Asignatura',
);

$this->menu=array(
	array('label'=>'Create AsignaturaProfesor', 'url'=>array('create')),
	array('label'=>'Manage AsignaturaProfesor', 'url'=>array('admin')),
);
?>

<h1>Profesores por Asignatura</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
