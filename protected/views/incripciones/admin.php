<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */

$this->breadcrumbs=array(
	'Inscripciones'=>array('index'),
	'Administrar',
);

$this->menu=array(
//	array('label'=>'List Inscripciones', 'url'=>array('index')),
	array('label'=>'Crear Inscripción', 'url'=>array('create')),
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

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'incripciones-grid',
	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
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
