<?php
/* @var $this AsignaturaProfesorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asignatura Profesors',
);

$this->menu=array(
	array('label'=>'Create AsignaturaProfesor', 'url'=>array('create')),
	array('label'=>'Manage AsignaturaProfesor', 'url'=>array('admin')),
);
?>

<h1>Asignatura Profesors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
