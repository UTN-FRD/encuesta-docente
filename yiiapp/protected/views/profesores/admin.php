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
