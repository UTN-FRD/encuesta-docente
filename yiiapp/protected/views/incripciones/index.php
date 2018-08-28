<?php
/* @var $this IncripcionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Incripciones',
);

$this->menu=array(
	array('label'=>'Create Incripciones', 'url'=>array('create')),
	array('label'=>'Manage Incripciones', 'url'=>array('admin')),
);
?>

<h1>Incripciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
