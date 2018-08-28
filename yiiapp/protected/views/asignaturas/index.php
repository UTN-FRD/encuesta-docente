<?php
/* @var $this AsignaturasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Asignaturases',
);

$this->menu=array(
	array('label'=>'Create Asignaturas', 'url'=>array('create')),
	array('label'=>'Manage Asignaturas', 'url'=>array('admin')),
);

?>


<h1>Asignaturases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
