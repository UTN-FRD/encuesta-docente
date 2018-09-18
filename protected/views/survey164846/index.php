<?php
/* @var $this Survey164846Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Survey164846s',
);

$this->menu=array(
	array('label'=>'Create Survey164846', 'url'=>array('create')),
	array('label'=>'Manage Survey164846', 'url'=>array('admin')),
);
?>

<h1>Survey164846s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
