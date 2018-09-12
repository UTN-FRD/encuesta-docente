<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */

$this->breadcrumbs=array(
	'Inscripciones'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Inscripciones', 'url'=>array('index')),
	array('label'=>'Create Inscripciones', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#incripciones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Inscripciones</h1>

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
	'id'=>'incripciones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		/* Comentamos campos que no nos interesan */
		// 'id',
		// 'participant_id',
		// 'asignatura_id',
		// 'anio_academico',
		// 'comentarios',

		'inscripto.firstname',
		array(
			'class'=>'CLinkColumn',
			'label'=>'Ver',
			'urlExpression'=>'\Yii::app()->createUrl("incripciones/admin", array("Incripciones[participant_id]=" => $data->participant_id))',
			),
		'inscripto.legajo',
		'inscriptoA.descripcion',
		'inscriptoA.plan',
		array(
			'class'=>'CLinkColumn',
			'label'=>'Ver',
			'urlExpression'=>'\Yii::app()->createUrl("incripciones/admin", array("Incripciones[asignatura_id]=" => $data->asignatura_id))',
			),
		'inscriptoA.perteneceACarrera.description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
