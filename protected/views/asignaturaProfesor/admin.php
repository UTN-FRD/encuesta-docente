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
	Opcionalmente, se puede ingresar un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b> o <b>=</b>) al principio de cada búsqueda para especificar cómo se debe realizar la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'asignatura-profesor-grid',
	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
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
			'urlExpression'=>'\Yii::app()->createUrl("AsignaturaProfesor/admin", array("AsignaturaProfesor[asignatura_id]" => $data->asignatura_id))',
			),
		'asignatura.plan',
		'asignatura.perteneceACarrera.description',
		'profesor.nombre',
		array(
			'class'=>'CLinkColumn',
			'label'=>'Ver',
			'urlExpression'=>'\Yii::app()->createUrl("AsignaturaProfesor/admin", array("AsignaturaProfesor[profesor_id]" => $data->profesor_id))',
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
