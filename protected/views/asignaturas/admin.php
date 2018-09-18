<?php
/* @var $this AsignaturasController */
/* @var $model Asignaturas */

$this->breadcrumbs=array(
	'Asignaturas'=>array('index'),
	'Administrar',
);

$this->menu=array(
//	array('label'=>'List Asignaturas', 'url'=>array('index')),
	array('label'=>'Crear Asignatura', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#asignaturas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Asignaturas</h1>

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
	'id'=>'asignaturas-grid',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'itemsCssClass'=>"table table-striped",
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descripcion',
		'electiva',
		'plan',
		'carrera_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
