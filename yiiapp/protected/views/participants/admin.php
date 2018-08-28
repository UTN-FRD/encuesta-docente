<?php
/* @var $this ParticipantsController */
/* @var $model Participants */

$this->breadcrumbs=array(
	'Participants'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Participants', 'url'=>array('index')),
	array('label'=>'Create Participants', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#participants-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Participants</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'participants-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'participant_id',
		'firstname',
		'lastname',
		'email',
		'language',
		'blacklisted',
		/*
		'owner_uid',
		'created_by',
		'created',
		'modified',
		'dni',
		'legajo',
		'anio_ingreso',
		'especialidad_plan',
		'carrera_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
