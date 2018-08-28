<?php
/* @var $this Survey164846Controller */
/* @var $model Survey164846 */

$this->breadcrumbs=array(
	'Survey164846s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Survey164846', 'url'=>array('index')),
	array('label'=>'Create Survey164846', 'url'=>array('create')),
	array('label'=>'Update Survey164846', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Survey164846', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Survey164846', 'url'=>array('admin')),
);
?>

<h1>View Survey164846 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'submitdate',
		'lastpage',
		'startlanguage',
		'seed',
		'ipaddr',
		'a',
		'b',
		'c',
		'd',
		'e',
		'f',
		'g',
		'asignatura_profesor_id',
	),
)); ?>
