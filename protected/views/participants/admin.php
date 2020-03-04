<?php
/* @var $this ParticipantsController */
/* @var $model Participants */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Administrar',
);

$this->menu=array(
//	array('label'=>'List Alumnos', 'url'=>array('index')),
	array('label'=>'Crear Alumno', 'url'=>array('create')),
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
<?php $this->renderPartial('../widgets/help', array('videoName'=>'alumnos')); ?>
<h1>Alumnos</h1>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'participants-grid',
	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'participant_id',
		'dni',
		'firstname',
		'perteneceACarrera.description',
		//array('header'=>'Nombre','value'=>'firstname'),
		/*
		'lastname',
		'email',
		'language',
		'blacklisted',
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
<script>
$(document).ready(function(){
    $("input").attr("autocomplete","off");   
});
</script>