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

	public function actionRespuestas($asignatura_profesor_id)
	{
		$asignaturaProfesor = Yii::app()->db->createCommand('SELECT p.id, ap.cargo, a.descripcion as asignatura, a.plan, p.nombre as docente, c.description as carrera, a.id as asignatura_id FROM asignatura_profesor ap JOIN asignaturas a on ap.asignatura_id = a.id JOIN profesores p on ap.profesor_id = p.id JOIN carreras c on a.carrera_id = c.id WHERE ap.id='.$asignatura_profesor_id)->queryAll();
		$cargo = $asignaturaProfesor[0]['cargo'];
		$surveyId = Yii::app()->params[$cargo];
		
		$this->render('respuestas',array(
			'asignaturaProfesor'=> $asignaturaProfesor,
			'preguntas'=> 
					Yii::app()->db->createCommand('SELECT * FROM questions WHERE sid='.$surveyId.' and parent_qid = 0')->queryAll(),
			'respuestas'=> 
					Yii::app()->db->createCommand('SELECT * FROM survey_'.$surveyId.' WHERE not(isnull(submitdate)) and asignatura_profesor_id = '.$asignatura_profesor_id)->queryAll(),
			'totalEncuestas'=>
					Yii::app()->db->createCommand('SELECT COUNT(1) as total FROM asignatura_profesor ap join incripciones i on ap.asignatura_id = i.asignatura_id where ap.id = '.$asignatura_profesor_id.' and i.anio_academico = 2019')->queryAll(),
		)); //(235,243)
	}

	public function actionRespuestasAgrupadas($pcarrera, $pcargo)
	{

		$this->render('reporteCarrera',array(
			'datos'=>Yii::app()->db->createCommand('SELECT a.nivel AS NIVEL, a.descripcion AS MATERIA, p.nombre AS PROFESOR, COALESCE(r.respuestas, 0) AS RESPUESTAS, count(1) AS INSCRIPTOS, ap.id AS asignatura_profesor_id FROM asignaturas a JOIN incripciones i on a.id = i.asignatura_id JOIN asignatura_profesor ap on i.asignatura_id = ap.asignatura_id JOIN profesores p on ap.profesor_id = p.id LEFT JOIN respuestas_2019_cant_por_asignatura_profesor r ON r.asignatura_profesor_id = ap.id WHERE i.anio_academico = 2019 and a.carrera_id = '.$pcarrera.' and ap.cargo = \''.$pcargo.'\' GROUP BY a.nivel, a.descripcion, p.nombre, r.respuestas, ap.id ORDER BY 1,2')->queryAll(),
			'carrera'=>Yii::app()->db->createCommand('SELECT id,description FROM carreras WHERE id = '.$pcarrera)->queryAll(),
			'cargo'=>$pcargo

		)); //(235,243)
	}

	public function actionGeneralesPorEncuestas()
	{

		$this->render('generalesPorEncuestas',array(
			// 'participacionPorCarrera'=> $this->loadParticipacionPorCarrera(),
			// 'cantidadEncuestasPorCarrera'=> $this->loadCantidadEncuestasPorCarrera(),
			'generales'=> $this->loadGeneralStatistics(),
		));
	}

	public function actionGeneralesPorAlumnos()
	{
		$this->render('generalesPorAlumnos',array(
			 'participacionPorCarrera'=> $this->loadParticipacionPorCarrera(),
			 'generalesPorAlumnos'=> $this->loadGeneralStatisticsByParticipant(),
			// 'cantidadEncuestasPorCarrera'=> $this->loadCantidadEncuestasPorCarrera(),
			// 'generales'=> $this->loadGeneralStatistics(),
		));
	}

	public function actionAvances()
	{
		$arrayFinal = array();

		try {
				
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

			foreach ($arrayDatos as $key => $arrayNivel) {
				$arrayFinal[$key] = array();
				foreach ($arrayNivel as $keyNivel => $valueNivel) {
					array_unshift($valueNivel, (string)$keyNivel);
					array_push($arrayFinal[$key], $valueNivel);
				}
				array_unshift($arrayFinal[$key], array('Nivel','No Respondidas','Respondidas'));
			}
		} catch (Exception $e) {
				
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
		$list = Yii::app()->db->createCommand('SELECT carrera as CARRERA, inscriptosPorCarrera as ALUMNOS FROM inscriptos_por_carrera')->queryAll(); //SELECT ss.CARRERA as CARRERA, count(ss.ALUMNO) as ALUMNOS from (SELECT distinct c.description as CARRERA, i.participant_id as ALUMNO FROM incripciones i INNER JOIN asignaturas a ON i.asignatura_id = a.id INNER JOIN carreras c ON a.carrera_id = c.id WHERE i.anio_academico = 2019 ) as ss group by ss.CARRERA

		$tituloYDato = array_column($list, 'ALUMNOS', 'CARRERA');

		$arrayDatos = array();
		array_push($arrayDatos, array('Alumnos', 'Carreras'));

		foreach ($tituloYDato as $key => $value) {
			array_push($arrayDatos, array($key, (int) $value));
		}

		return $arrayDatos;
	}

	function loadCandidadInscripcionesPorCarreraNivel(){
		$list = Yii::app()->db->createCommand('SELECT * from inscripciones_por_carrera_nivel')->queryAll();

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


	function loadParticipacionPorCarrera(){
		$list = Yii::app()->db->createCommand('SELECT ssa.carrera, ssa.inscriptosPorCarrera, ssb.alumnosParticipantes FROM inscriptos_por_carrera ssa join alumnos_participantes_por_carrera ssb on ssa.carrera = ssb.carrera')->queryAll();


/* Array ( 
		[0] => Array ( 
			[carrera] => Ingeniería Eléctrica 
			[inscriptosPorCarrera] => 137 
			[alumnosParticipantes] => 25 ) 
		[1] => Array ( 
			[carrera] => Ingeniería en Sistemas de Información 
			[inscriptosPorCarrera] => 281 
			[alumnosParticipantes] => 92 ) 
		[2] => Array ( 
			[carrera] => Ingeniería Mecánica 
			[inscriptosPorCarrera] => 194 
			[alumnosParticipantes] => 30 ) 
		[3] => Array ( 
			[carrera] => Ingeniería Química 
			[inscriptosPorCarrera] => 285 
			[alumnosParticipantes] => 63 )
		) 1
*/
		$map = [];
		foreach ($list as $row) {
		    array_push($map, [$row['carrera'],strval($row['inscriptosPorCarrera']),strval($row['alumnosParticipantes'])]);
		}

		return $map;
	}

	function loadCantidadEncuestasPorCarrera(){
		$list = Yii::app()->db->createCommand('SELECT ssa.carrera, ssa.encuestasRespondidas as encuestasProfesor, ssb.encuestasRespondidas as encuestasAuxiliar FROM respuestas_20191_por_carrera ssa LEFT JOIN respuestas_20192_por_carrera ssb on ssa.carrera = ssb.carrera')->queryAll();

	$map = [];
	foreach ($list as $row) {
	    array_push($map, [$row['carrera'],strval($row['encuestasProfesor']),strval($row['encuestasAuxiliar'])]);
	}

	return $map;
	}


	function loadGeneralStatistics(){
		$list = Yii::app()->db->createCommand('select asignatura_profesor_id, respuestas, cargo, asignatura, nivel, carrera_id, departamento_id, asignatura_id, profesor, profesor_id from respuestas_2019_cant_por_asignatura_profesor')->queryAll();

		$inscripciones = Yii::app()->db->createCommand('SELECT a.carrera_id, a.nivel, a.departamento_id, count(1) as alumnos from incripciones i JOIN asignaturas a on i.asignatura_id = a.id WHERE i.anio_academico = 2019 GROUP BY a.carrera_id, a.nivel, a.departamento_id')->queryAll();
		
		$map = array(
			"generales"=>array(
				"totalRespuestas"=>0,
				"totalEncuestas"=>0
			),
			"respuestasPorCarrera"=>array(
				"5"=>array(
					"descripcion"=>"Ingeniería en Sistemas de Información",
					"totalRespuestas"=>0,
					"totalEncuestas"=>0,
					"Titular"=>0,
					"Auxiliar"=>0,
					"1"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"2"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"3"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"4"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"5"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"0"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					)
				),
				"7"=>array(
					"descripcion"=>"Ingeniería Eléctrica",
					"totalRespuestas"=>0,
					"totalEncuestas"=>0,
					"Titular"=>0,
					"Auxiliar"=>0,
					"1"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"2"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"3"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"4"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"5"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"0"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					)
				),
				"17"=>array(
					"descripcion"=>"Ingeniería Mecánica",
					"totalRespuestas"=>0,
					"totalEncuestas"=>0,
					"Titular"=>0,
					"Auxiliar"=>0,
					"1"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"2"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"3"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"4"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"5"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"0"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					)
				),
				"27"=>array(
					"descripcion"=>"Ingeniería Química",
					"totalRespuestas"=>0,
					"totalEncuestas"=>0,
					"Titular"=>0,
					"Auxiliar"=>0,
					"1"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"2"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"3"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"4"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"5"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					),
					"0"=>array(
						"totalRespuestas"=>0,
						"totalEncuestas"=>0
					)
				)
			),
			"respuestasPorDepartamento"=>array(
				"4"=>array(
					"descripcion"=>"Química",
					"totalRespuestas"=>0,
					"totalEncuestas"=>0
				),
				"12"=>array(
					"descripcion"=>"Sistemas de Información",
					"totalRespuestas"=>0,
					"totalEncuestas"=>0
				),
				"15"=>array(
					"descripcion"=>"Eléctrica",
					"totalRespuestas"=>0,
					"totalEncuestas"=>0
				),
				"16"=>array(
					"descripcion"=>"Mecánica",
					"totalRespuestas"=>0,
					"totalEncuestas"=>0
				),
				"17"=>array(
					"descripcion"=>"Materias Básicas",
					"totalRespuestas"=>0,
					"totalEncuestas"=>0
				),
			),
			"Laboratorio"=>array(
				"Laboratorio_de_Mecánica"=>0,
				"Laboratorio_de_Física"=>0,
				"Laboratorio_de_Química"=>0,
				"Laboratorio_de_Electrica"=>0,
				"Laboratorio_de_Sistemas_"=>0
			)
		);
		
		foreach ($list as $row) {
			$map["generales"]["totalRespuestas"] = $map["generales"]["totalRespuestas"] + $row["respuestas"];

			$map["respuestasPorCarrera"][$row["carrera_id"]]["totalRespuestas"] = $map["respuestasPorCarrera"][$row["carrera_id"]]["totalRespuestas"] + $row["respuestas"];
			
			$map["respuestasPorCarrera"][$row["carrera_id"]][$row["nivel"]]["totalRespuestas"] = $map["respuestasPorCarrera"][$row["carrera_id"]][$row["nivel"]]["totalRespuestas"] + $row["respuestas"];
			
			$map["respuestasPorDepartamento"][$row["departamento_id"]]["totalRespuestas"] = $map["respuestasPorDepartamento"][$row["departamento_id"]]["totalRespuestas"] + $row["respuestas"];

			if ($row["cargo"]=="Laboratorio") {
				$map["Laboratorio"][str_replace(' ','_',$row["asignatura"])] = $map["Laboratorio"][str_replace(' ','_',$row["asignatura"])] + $row["respuestas"];
			}else{
				$map["respuestasPorCarrera"][$row["carrera_id"]][$row["cargo"]] = $map["respuestasPorCarrera"][$row["carrera_id"]][$row["cargo"]] + $row["respuestas"];
			}

		}

		foreach ($inscripciones as $row) {
			$map["generales"]["totalEncuestas"] = $map["generales"]["totalEncuestas"] + $row["alumnos"];
			
			$map["respuestasPorCarrera"][$row["carrera_id"]]["totalEncuestas"] = $map["respuestasPorCarrera"][$row["carrera_id"]]["totalEncuestas"] + $row["alumnos"];

			$map["respuestasPorCarrera"][$row["carrera_id"]][$row["nivel"]]["totalEncuestas"] = $map["respuestasPorCarrera"][$row["carrera_id"]][$row["nivel"]]["totalEncuestas"] + $row["alumnos"];
			
			$map["respuestasPorDepartamento"][$row["departamento_id"]]["totalEncuestas"] = $map["respuestasPorDepartamento"][$row["departamento_id"]]["totalEncuestas"] + $row["alumnos"];
		}

		return $map;
	}

	function loadGeneralStatisticsByParticipant(){
		$list = Yii::app()->db->createCommand('select asignatura_profesor_id, dni_alumno, nivel, alumno_carrera, asignatura_carrera, departamento_id, asignatura_id FROM respuestas_por_alumno')->queryAll();

		return $list;
	}
}
