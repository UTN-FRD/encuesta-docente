<?php
/* @var $this ProfesoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reportes',
);

$this->menu=array(
);
?>

<h1>Reportes</h1>

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
