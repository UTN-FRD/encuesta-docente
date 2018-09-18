<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */

$this->breadcrumbs=array(
	'Profesores'=>array('index'),
	'Administrar',
);

$this->menu=array(
//	array('label'=>'List Profesores', 'url'=>array('index')),
	array('label'=>'Crear Profesor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profesores-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Profesores</h1>

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
	'id'=>'profesores-grid',
	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		array(
			'class'=>'CLinkColumn',
			'label'=>'Ver Materias',
			'urlExpression'=>'\Yii::app()->createUrl("asignaturaprofesor/admin", array("AsignaturaProfesor[profesor_id]" => $data->id))',
		),

		'nombre',
		//'apellido',
		//'cargo',
		'legajo',
		'dni',
		/*
		'fecha_ingreso',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
