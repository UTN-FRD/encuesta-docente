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


	function loadParticipacionPorCarrera(){
		$list = Yii::app()->db->createCommand('select ssa.carrera, ssa.inscriptosPorCarrera, ssb.alumnosParticipantes
from
(select ss.carrera as carrera, count(1) as inscriptosPorCarrera from ( SELECT p.firstname as alumno, p.legajo as legajo, c.description as carrera, count(1) as inscripciones FROM participants p JOIN incripciones i on p.participant_id = i.participant_id join carreras c on p.carrera_id = c.id WHERE i.anio_academico = 2019 GROUP BY 1, 2, 3) ss group by 1) ssa
join (select ss.carrera as carrera, count(1) as alumnosParticipantes
from (
select distinct p.firstname, c.description as carrera, count(ss1.asignatura_profesor)
from participants p join
(select replace(replace(replace(replace(replace(replace(replace(replace(replace(replace(ss.ap_encrypt,\'A\',\'0\'),\'S\',\'1\'),\'D\',\'2\'),\'F\',\'3\'),\'G\',\'4\'),\'H\',\'5\'),\'J\',\'6\'),\'K\',\'7\'),\'L\',\'8\'),\'Z\',\'9\') as asignatura_profesor,  replace(replace(replace(replace(replace(replace(replace(replace(replace(replace(ss.dni_encrypt,\'A\',\'0\'),\'S\',\'1\'),\'D\',\'2\'),\'F\',\'3\'),\'G\',\'4\'),\'H\',\'5\'),\'J\',\'6\'),\'K\',\'7\'),\'L\',\'8\'),\'Z\',\'9\')  as dni
from 
(select REPLACE(t.token, RIGHT(t.token, 8), \'\') as ap_encrypt, RIGHT(t.token, 8) as dni_encrypt
FROM tokens_20191 t
WHERE t.usesleft = 0
union 
select REPLACE(t.token, RIGHT(t.token, 8), \'\') as ap_encrypt, RIGHT(t.token, 8) as dni_encrypt
FROM tokens_20192 t
WHERE t.usesleft = 0
union 
select REPLACE(t.token, RIGHT(t.token, 8), \'\') as ap_encrypt, RIGHT(t.token, 8) as dni_encrypt
FROM tokens_20193 t
WHERE t.usesleft = 0) ss ) ss1
on ss1.dni = p.dni
join carreras c on p.carrera_id = c.id
group by 1,2
) ss
group by 1) ssb on ssa.carrera = ssb.carrera')->queryAll();


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
		$list = Yii::app()->db->createCommand('select ssa.carrera, ssa.encuestasProfesor, ssb.encuestasAuxiliar
from
(select distinct c.description as carrera, count(ss1.asignatura_profesor) as encuestasProfesor from (select replace(replace(replace(replace(replace(replace(replace(replace(replace(replace(ss.ap_encrypt,\'A\',\'0\'),\'S\',\'1\'),\'D\',\'2\'),\'F\',\'3\'),\'G\',\'4\'),\'H\',\'5\'),\'J\',\'6\'),\'K\',\'7\'),\'L\',\'8\'),\'Z\',\'9\') as asignatura_profesor, replace(replace(replace(replace(replace(replace(replace(replace(replace(replace(ss.dni_encrypt,\'A\',\'0\'),\'S\',\'1\'),\'D\',\'2\'),\'F\',\'3\'),\'G\',\'4\'),\'H\',\'5\'),\'J\',\'6\'),\'K\',\'7\'),\'L\',\'8\'),\'Z\',\'9\') as dni from (select REPLACE(t.token, RIGHT(t.token, 8), \'\') as ap_encrypt, RIGHT(t.token, 8) as dni_encrypt FROM tokens_20191 t WHERE t.usesleft = 0 ) ss ) ss1
 join asignatura_profesor ap on ss1.asignatura_profesor = ap.id join asignaturas a on ap.asignatura_id = a.id join carreras c on a.carrera_id = c.id group by 1) ssa
left JOIN
(select distinct c.description as carrera, count(ss1.asignatura_profesor) as encuestasAuxiliar from (select replace(replace(replace(replace(replace(replace(replace(replace(replace(replace(ss.ap_encrypt,\'A\',\'0\'),\'S\',\'1\'),\'D\',\'2\'),\'F\',\'3\'),\'G\',\'4\'),\'H\',\'5\'),\'J\',\'6\'),\'K\',\'7\'),\'L\',\'8\'),\'Z\',\'9\') as asignatura_profesor, replace(replace(replace(replace(replace(replace(replace(replace(replace(replace(ss.dni_encrypt,\'A\',\'0\'),\'S\',\'1\'),\'D\',\'2\'),\'F\',\'3\'),\'G\',\'4\'),\'H\',\'5\'),\'J\',\'6\'),\'K\',\'7\'),\'L\',\'8\'),\'Z\',\'9\') as dni from (select REPLACE(t.token, RIGHT(t.token, 8), \'\') as ap_encrypt, RIGHT(t.token, 8) as dni_encrypt FROM tokens_20192 t WHERE t.usesleft = 0 ) ss ) ss1
 join asignatura_profesor ap on ss1.asignatura_profesor = ap.id join asignaturas a on ap.asignatura_id = a.id join carreras c on a.carrera_id = c.id group by 1) ssb on ssa.carrera = ssb.carrera')->queryAll();

	$map = [];
	foreach ($list as $row) {
	    array_push($map, [$row['carrera'],strval($row['encuestasProfesor']),strval($row['encuestasAuxiliar'])]);
	}

	return $map;
	}


	function loadGeneralStatistics(){
		$list = Yii::app()->db->createCommand('select ss2.asignatura_profesor as asignatura_profesor_id, ss2.respuestas as respuestas, ap.cargo, a.descripcion as asignatura, a.nivel, a.carrera_id, a.departamento_id, a.id as asignatura_id, p.nombre as profesor, p.id as profesor_id
from
(select replace(replace(replace(replace(replace(replace(replace(replace(replace(replace(ss.ap_encrypt,\'A\',\'0\'),\'S\',\'1\'),\'D\',\'2\'),\'F\',\'3\'),\'G\',\'4\'),\'H\',\'5\'),\'J\',\'6\'),\'K\',\'7\'),\'L\',\'8\'),\'Z\',\'9\') as asignatura_profesor,
count(ss.dni_encrypt) as respuestas
from (select REPLACE(token, RIGHT(token, 8), \'\') as ap_encrypt, RIGHT(token, 8) as dni_encrypt FROM tokens_20191 WHERE usesleft = 0
union
select REPLACE(token, RIGHT(token, 8), \'\') as ap_encrypt, RIGHT(token, 8) as dni_encrypt FROM tokens_20192 WHERE usesleft = 0
union
select REPLACE(token, RIGHT(token, 8), \'\') as ap_encrypt, RIGHT(token, 8) as dni_encrypt FROM tokens_20193 WHERE usesleft = 0 ) ss
group by ss.ap_encrypt) ss2
join asignatura_profesor ap on ss2.asignatura_profesor = ap.id
join asignaturas a on ap.asignatura_id = a.id
join profesores p on ap.profesor_id = p.id')->queryAll();

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
			)
		);
		
		foreach ($list as $row) {
			$map["generales"]["totalRespuestas"] = $map["generales"]["totalRespuestas"] + $row["respuestas"];

			$map["respuestasPorCarrera"][$row["carrera_id"]]["totalRespuestas"] = $map["respuestasPorCarrera"][$row["carrera_id"]]["totalRespuestas"] + $row["respuestas"];
			
			$map["respuestasPorCarrera"][$row["carrera_id"]][$row["nivel"]]["totalRespuestas"] = $map["respuestasPorCarrera"][$row["carrera_id"]][$row["nivel"]]["totalRespuestas"] + $row["respuestas"];
			
			$map["respuestasPorDepartamento"][$row["departamento_id"]]["totalRespuestas"] = $map["respuestasPorDepartamento"][$row["departamento_id"]]["totalRespuestas"] + $row["respuestas"];
		}

		foreach ($inscripciones as $row) {
			$map["generales"]["totalEncuestas"] = $map["generales"]["totalEncuestas"] + $row["alumnos"];
			
			$map["respuestasPorCarrera"][$row["carrera_id"]]["totalEncuestas"] = $map["respuestasPorCarrera"][$row["carrera_id"]]["totalEncuestas"] + $row["alumnos"];

			$map["respuestasPorCarrera"][$row["carrera_id"]][$row["nivel"]]["totalEncuestas"] = $map["respuestasPorCarrera"][$row["carrera_id"]][$row["nivel"]]["totalEncuestas"] + $row["alumnos"];
			
			$map["respuestasPorDepartamento"][$row["departamento_id"]]["totalEncuestas"] = $map["respuestasPorDepartamento"][$row["departamento_id"]]["totalEncuestas"] + $row["alumnos"];
		}

		return $map;
	}
}
