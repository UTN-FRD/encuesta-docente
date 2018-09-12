<?php
/* @var $this AsignaturaProfesorController */
/* @var $model AsignaturaProfesor */

$this->breadcrumbs=array(
	'Profesores por Asignatura'=>array('index'),
	'Administrar',
);

$this->menu=array(
//	array('label'=>'List AsignaturaProfesor', 'url'=>array('index')),
	array('label'=>'Crear Asignatura-Profesor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#asignatura-profesor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Profesores por Asignatura</h1>

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
	'id'=>'asignatura-profesor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		// 'asignatura_id',
		// 'profesor_id',
		// 'id',
		'asignatura.descripcion',
		array(
			'class'=>'CLinkColumn',
			'label'=>'Ver',
			'urlExpression'=>'\Yii::app()->createUrl("asignaturaprofesor/admin", array("AsignaturaProfesor[asignatura_id]" => $data->asignatura_id))',
			),
		'asignatura.plan',
		'asignatura.perteneceACarrera.description',
		'profesor.nombre',
		array(
			'class'=>'CLinkColumn',
			'label'=>'Ver',
			'urlExpression'=>'\Yii::app()->createUrl("asignaturaprofesor/admin", array("AsignaturaProfesor[profesor_id]" => $data->profesor_id))',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
