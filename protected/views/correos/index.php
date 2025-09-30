<?php
/* @var $this CorreosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Correos',
);

$this->menu=array(
	array('label'=>'Administrar Correos', 'url'=>array('admin')),
	array('label'=>'Estadísticas', 'url'=>array('estadisticas')),
);
?>

<h1>Correos Electrónicos</h1>

<p>Lista de los correos electrónicos enviados por el sistema.</p>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>