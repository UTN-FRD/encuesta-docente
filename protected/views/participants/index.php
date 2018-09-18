<?php
/* @var $this ParticipantsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumnos',
);

$this->menu=array(
	array('label'=>'Create Alumnos', 'url'=>array('create')),
	array('label'=>'Manage Alumnos', 'url'=>array('admin')),
);
?>

<h1>Alumnos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
