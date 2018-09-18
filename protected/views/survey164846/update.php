<?php
/* @var $this Survey164846Controller */
/* @var $model Survey164846 */

$this->breadcrumbs=array(
	'Survey164846s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Survey164846', 'url'=>array('index')),
	array('label'=>'Create Survey164846', 'url'=>array('create')),
	array('label'=>'View Survey164846', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Survey164846', 'url'=>array('admin')),
);
?>

<h1>Update Survey164846 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>