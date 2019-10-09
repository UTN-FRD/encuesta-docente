<?php

class ReportesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->render('index',array(
			'inscripcionesPorCarrera'=> $this->loadInscripcionesPorCarrera()
		));
	}

	public function loadInscripcionesPorCarrera() {
		$list = Yii::app()->db->createCommand('
			SELECT c.description as CARRERA, count(1) as INSCRIPCIONES 
			FROM incripciones i INNER JOIN asignaturas a ON i.asignatura_id = a.id 
			    INNER JOIN carreras c ON a.carrera_id = c.id
			WHERE i.anio_academico = 2019
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


}
