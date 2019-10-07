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
$inscripciones = $_GET["Incripciones"] ?? '';
?>

<h1>Inscripciones <span name="year"><?= $inscripciones["anio_academico"] ?? '' ?></span></h1> 

<?php
	function crearDatos() {
		$inscripcionesSQL = array();
		$carrerasSQL = array();
		$pares = array();

		$list = Yii::app()->db->createCommand('
			SELECT c.description as CARRERA, 
			count(1) as INSCRIPCIONES FROM incripciones i
			INNER JOIN asignaturas a
			ON i.asignatura_id = a.id 
			INNER JOIN carreras c
			ON a.carrera_id = c.id
			WHERE i.anio_academico = 2018
			GROUP BY c.description
		')->queryAll();

		$tituloYDato = array_column($list, 'INSCRIPCIONES', 'CARRERA');

		$arrayDatos = array();
		array_push($arrayDatos, array('Inscripciones', 'Carreras'));

		foreach ($tituloYDato as $key => $value) {
			array_push($arrayDatos, array($key, (int) $value));
		}

		return $arrayDatos;
	}
	
	$grafico = $this->widget('ext.Hzl.google.HzlVisualizationChart', array('visualization' => 'PieChart',
		'data' => crearDatos(),
		'options' => array('title' => 'Inscripciones por carrera')));
?>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<script>
document.querySelector('#yw0 input[type="submit"]').addEventListener('click', function () {
	let titleYear = document.querySelector('h1 span[name="year"]')
	let year = document.querySelector('#Incripciones_anio_academico').value
	titleYear.innerText = year
})
</script>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'incripciones-grid',
	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		/* Comentamos campos que no nos interesan */
		// 'id',
		// 'participant_id',
		// 'asignatura_id',
		
		array(
			'name'=> 'anio_academico',
			'sortable'=>false,
		),
		// 'comentarios',

		'inscripto.firstname',
		array(
			'class'=>'CLinkColumn',
			'label'=>'Ver',
			'urlExpression'=>'\Yii::app()->createUrl("incripciones/admin", array("Incripciones[participant_id]=" => $data->participant_id,"Incripciones[anio_academico]=" => $_GET["Incripciones"]["anio_academico"]))',
		),
		'inscripto.legajo',
		'inscriptoA.descripcion',
		'inscriptoA.plan',
		array(
			'class'=>'CLinkColumn',
			'label'=>'Ver',
			'urlExpression'=>'\Yii::app()->createUrl("incripciones/admin", array("Incripciones[asignatura_id]=" => $data->asignatura_id,"Incripciones[anio_academico]=" => $_GET["Incripciones"]["anio_academico"]))',
		),
		'inscriptoA.perteneceACarrera.description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
