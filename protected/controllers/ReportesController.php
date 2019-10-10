<?php

class ReportesController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';


	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->render('index',array(
			'inscripcionesPorCarrera'=> $this->loadInscripcionesPorCarrera(),
			'alumnosPorCarrera'=> $this->loadCantidadAlumnosPorCarrera(),
			'alumnosPorCarreraNivel'=> $this->loadCandidadAlumnosPorCarreraNivel(),
			'inscripcionesPorCarreraNivel'=> $this->loadCandidadInscripcionesPorCarreraNivel(),
		));
	}

	public function actionAvances()
	{
		$encuestasPorNivel = Yii::app()->db->createCommand('
			SELECT c.description as CARRERA, a.nivel as NIVEL, count(1) as CANTIDAD
			FROM asignaturas a 
			  INNER JOIN incripciones i ON a.id = i.asignatura_id
			  INNER JOIN carreras c ON c.id = a.carrera_id
			WHERE
			  a.nivel > 0 AND
			  i.anio_academico = 2019 
			GROUP BY c.description, a.nivel
			ORDER BY 1,2
		')->queryAll();

		$encuestaIds = array(Yii::app()->params['Titular']);
		if(array_search(Yii::app()->params['Auxiliar'], $encuestaIds) === false){
			array_push($encuestaIds, Yii::app()->params['Auxiliar']);
		}
		if(array_search(Yii::app()->params['Laboratorio'], $encuestaIds) === false){
			array_push($encuestaIds, Yii::app()->params['Laboratorio']);
		}
		$subselect = '';
		foreach ($encuestaIds as $value) {
			$subselect = $subselect.' select asignatura_profesor_id, submitdate from survey_'.$value.' UNION ';
		}
		$subselect = substr($subselect, 0, -6);

		$respuestasPorNivel = Yii::app()->db->createCommand('
			SELECT c.description as CARRERA, a.nivel as NIVEL, count(1) as CANTIDAD
			FROM ('.$subselect.') s
			  INNER JOIN asignatura_profesor ap on s.asignatura_profesor_id = ap.id
			  INNER JOIN asignaturas a on ap.asignatura_id = a.id
			  INNER JOIN carreras c ON a.carrera_id = c.id
			WHERE s.submitdate is NOT null and a.nivel > 0
			GROUP BY c.description, a.nivel
			ORDER BY 1,2
		')->queryAll();

		$arrayDatos = array();
		foreach ($encuestasPorNivel as $value) {
			$arrayDatos[$value['CARRERA']][$value['NIVEL']] = array((int)$value['CANTIDAD'], 0);
		}

		foreach ($respuestasPorNivel as $value) {
			$respuestas = (int)$value['CANTIDAD'];
			$pendientes = $arrayDatos[$value['CARRERA']][$value['NIVEL']][0] - $respuestas;

			$arrayDatos[$value['CARRERA']][$value['NIVEL']][0] = $pendientes;
			$arrayDatos[$value['CARRERA']][$value['NIVEL']][1] = $respuestas;
		}

		$arrayFinal = array();
		foreach ($arrayDatos as $key => $arrayNivel) {
			$arrayFinal[$key] = array();
			foreach ($arrayNivel as $keyNivel => $valueNivel) {
				array_unshift($valueNivel, (string)$keyNivel);
				array_push($arrayFinal[$key], $valueNivel);
			}
			array_unshift($arrayFinal[$key], array('Nivel','No Respondidas','Respondidas'));
		}

		$this->render('avances',array(
			'arrayDatos'=> $arrayFinal,
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

	function loadCantidadAlumnosPorCarrera(){
		$list = Yii::app()->db->createCommand('
		SELECT ss.CARRERA as CARRERA, count(ss.ALUMNO) as ALUMNOS
			from (SELECT distinct c.description as CARRERA, i.participant_id as ALUMNO 
				FROM incripciones i INNER JOIN asignaturas a ON i.asignatura_id = a.id 
				    INNER JOIN carreras c ON a.carrera_id = c.id
				WHERE i.anio_academico = 2019 ) as ss
			group by ss.CARRERA
		')->queryAll();

		$tituloYDato = array_column($list, 'ALUMNOS', 'CARRERA');

		$arrayDatos = array();
		array_push($arrayDatos, array('Alumnos', 'Carreras'));

		foreach ($tituloYDato as $key => $value) {
			array_push($arrayDatos, array($key, (int) $value));
		}

		return $arrayDatos;
	}

	function loadCandidadInscripcionesPorCarreraNivel(){
		$list = Yii::app()->db->createCommand('
		SELECT c.description as CARRERA, a.nivel as NIVEL, count(1) as ALUMNOS
		from asignaturas a 
		  INNER JOIN incripciones i
		    ON a.id = i.asignatura_id
		  INNER JOIN carreras c
		    ON c.id = a.carrera_id
		WHERE
		  a.nivel > 0 and
		  i.anio_academico = 2019 
		GROUP BY
		  c.description, a.nivel
		ORDER BY 2, 1
		')->queryAll();

		$arrayDatosAux = array();
		$arrayNivel = array();
		$arrayCarreras = array();

		$control = $list[0]['NIVEL'];
		array_push($arrayNivel, $control);
		foreach ($list as $value) {
			if($control != $value['NIVEL']){
				array_push($arrayDatosAux, $arrayNivel);
				$arrayNivel = array();
				$control = $value['NIVEL'];
			}
			if(array_search($value['CARRERA'], $arrayCarreras) === false){
				array_push($arrayCarreras, $value['CARRERA']);
			}

			$arrayDatosAux[$control][array_search($value['CARRERA'], $arrayCarreras)] = (int)$value['ALUMNOS'];
		}

		$arrayDatos = array();
		foreach ($arrayDatosAux as $key => $value) {
			array_unshift($value, (int)$key);
			array_push($arrayDatos, $value);
		}

		array_unshift($arrayCarreras, 'Nivel');
		array_unshift($arrayDatos, $arrayCarreras);

		return $arrayDatos;
	}

	function loadCandidadAlumnosPorCarreraNivel(){
		$list = Yii::app()->db->createCommand('

		SELECT ss.CARRERA as CARRERA, ss.NIVEL as NIVEL, count(ss.ALUMNO) as ALUMNOS
			from (SELECT c.description as CARRERA, MIN(a.nivel) as NIVEL, i.participant_id as ALUMNO 
				FROM incripciones i INNER JOIN asignaturas a ON i.asignatura_id = a.id 
				    INNER JOIN carreras c ON a.carrera_id = c.id
				WHERE a.nivel > 0 and i.anio_academico = 2019
				GROUP BY 3,1) as ss
			group by 2,1
		')->queryAll();

		$arrayDatosAux = array();
		$arrayNivel = array();
		$arrayCarreras = array();

		$control = $list[0]['NIVEL'];
		array_push($arrayNivel, $control);
		foreach ($list as $value) {
			if($control != $value['NIVEL']){
				array_push($arrayDatosAux, $arrayNivel);
				$arrayNivel = array();
				$control = $value['NIVEL'];
			}
			if(array_search($value['CARRERA'], $arrayCarreras) === false){
				array_push($arrayCarreras, $value['CARRERA']);
			}

			$arrayDatosAux[$control][array_search($value['CARRERA'], $arrayCarreras)] = (int)$value['ALUMNOS'];
		}

		$arrayDatos = array();
		foreach ($arrayDatosAux as $key => $value) {
			array_unshift($value, (int)$key);
			array_push($arrayDatos, $value);
		}

		array_unshift($arrayCarreras, 'Nivel');
		array_unshift($arrayDatos, $arrayCarreras);

		return $arrayDatos;
	}

}
