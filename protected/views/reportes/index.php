<?php
/* @var $this ProfesoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reportes',
);

$this->menu=array();
?>

<h1>Reportes</h1>

<?php
	
	$grafico = $this->widget('ext.Hzl.google.HzlVisualizationChart', 
		array(
			'visualization' => 'PieChart',
			'data' => $inscripcionesPorCarrera,
			'options' => array('title' => 'Inscripciones por carrera')));
?>
