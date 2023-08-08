<?php
/* @var $this ProfesoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profesores',
);

$this->menu=array(
	array('label'=>'Create Profesores', 'url'=>array('create')),
	array('label'=>'Manage Profesores', 'url'=>array('admin')),
);
?>

<h1>Profesores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
