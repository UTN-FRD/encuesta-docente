<?php
/* @var $this departamentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Departamentos',
);

$this->menu=array(
	array('label'=>'Create Departamentos', 'url'=>array('create')),
	array('label'=>'Manage Departamentos', 'url'=>array('admin')),
);
?>

<h1>Departamentos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
