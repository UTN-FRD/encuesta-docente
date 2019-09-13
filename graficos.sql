-- cantidad de encuestas por carrera/nivel
select c.description, a.nivel, count(1)
from asignaturas a 
  INNER JOIN incripciones i
    ON a.id = i.asignatura_id
  INNER JOIN carreras c
    ON c.id = a.carrera_id
WHERE
  i.anio_academico = 2019 
GROUP BY
  c.description, a.nivel


-- alumnos por año
SELECT c.description, ss.nivel, count(ss.alumno)
FROM carreras c
  INNER JOIN
    (SELECT p.firstname as alumno, a.carrera_id as carrera_id, MIN(a.nivel) as nivel
    FROM participants p
      JOIN incripciones i 
        ON p.participant_id = i.participant_id
      JOIN asignaturas a
        ON a.id = i.asignatura_id
    WHERE i.anio_academico = 2019
      AND a.carrera_id = 5
    GROUP BY p.firstname) ss
  ON c.id = ss.carrera_id

-- ENCUESTAS RESPONDIDAS
SELECT count(1)
FROM survey_2019 s
where s.submitdate is NOT null

-- RESPUESTAS VS TOTAL
SELECT 'RESPUESTAS', count(1)
FROM survey_2019 s
where s.submitdate is NOT null
UNION
SELECT 'TOTAL', COUNT(1)
FROM incripciones i
WHERE i.anio_academico = 2019

-- ENCUESTAS TOTAL Y RESPONDIDAS POR MATERIA/PROFESOR
SELECT a.descripcion, c.description, p.nombre, ap.cargo, count(1) as RESPONDIDAS, ss.total as TOTAL
FROM survey_2019 s
  INNER JOIN asignatura_profesor ap on s.asignatura_profesor_id = ap.id
  INNER JOIN asignaturas a on ap.asignatura_id = a.id
  INNER JOIN profesores p ON ap.profesor_id = p.id  
  INNER JOIN carreras c ON a.carrera_id = c.id
  INNER JOIN ( SELECT i.asignatura_id as asignatura_id, COUNT(1) as total FROM incripciones i WHERE i.anio_academico = 2019 GROUP BY i.asignatura_id ) ss ON a.id = ss.asignatura_id
WHERE s.submitdate is NOT null
GROUP BY a.descripcion, c.description, p.nombre, ap.cargo

-- ENCUESTAS TOTAL Y RESPONDIDAS POR CARRERA/NIVEL
SELECT c.description as carrera, a.nivel as nivel, count(1) as RESPONDIDAS, ss.total as TOTAL
FROM survey_2019 s
  INNER JOIN asignatura_profesor ap on s.asignatura_profesor_id = ap.id
  INNER JOIN asignaturas a on ap.asignatura_id = a.id
  INNER JOIN profesores p ON ap.profesor_id = p.id  
  INNER JOIN carreras c ON a.carrera_id = c.id
  INNER JOIN ( SELECT i.asignatura_id as asignatura_id, COUNT(1) as total FROM incripciones i WHERE i.anio_academico = 2019 GROUP BY i.asignatura_id ) ss ON a.id = ss.asignatura_id
WHERE s.submitdate is NOT null
GROUP BY c.description, a.nivel

-- ENCUESTAS RESPONDIDAS POR MATERIA/PROFESOR
SELECT a.descripcion as asignatura, p.nombre as profesor, ap.cargo as cargo, c.description as carrera, a.nivel as nivel, count(1) as RESPONDIDAS, ss.total as TOTAL
FROM survey_2019 s
  INNER JOIN asignatura_profesor ap on s.asignatura_profesor_id = ap.id
  INNER JOIN asignaturas a on ap.asignatura_id = a.id
  INNER JOIN profesores p ON ap.profesor_id = p.id  
  INNER JOIN carreras c ON a.carrera_id = c.id
  INNER JOIN ( SELECT i.asignatura_id as asignatura_id, COUNT(1) as total FROM incripciones i WHERE i.anio_academico = 2019 GROUP BY i.asignatura_id ) ss ON a.id = ss.asignatura_id
WHERE s.submitdate is NOT null
GROUP BY a.descripcion, p.nombre, ap.cargo, c.description, a.nivel

-- NOMBRE DE LAS PREGUNTAS
SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='limesurvey' 
    AND `TABLE_NAME`='survey_2019'
     and COLUMN_NAME LIKE '2019%';

-- PREGUNTAS POR CAMPOS
SELECT SUBSTRING_INDEX(`COLUMN_NAME`,'X',1) as survey_id,
       SUBSTRING_INDEX(SUBSTRING_INDEX(`COLUMN_NAME`,'X',2), 'X',-1) as group_id,
       SUBSTRING_INDEX(`COLUMN_NAME`,'X',-1) as question_id       
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='limesurvey' 
    AND `TABLE_NAME`='survey_2019'
     and COLUMN_NAME LIKE '2019%'

-- RESPUESTAS POR MATERIA/PROFESOR
SELECT a.descripcion as asignatura, p.nombre as profesor, ap.cargo as cargo, c.description as carrera, a.nivel as nivel, s.*
FROM survey_2019 s
  INNER JOIN asignatura_profesor ap on s.asignatura_profesor_id = ap.id
  INNER JOIN asignaturas a on ap.asignatura_id = a.id
  INNER JOIN profesores p ON ap.profesor_id = p.id  
  INNER JOIN carreras c ON a.carrera_id = c.id
  INNER JOIN ( SELECT i.asignatura_id as asignatura_id, COUNT(1) as total FROM incripciones i WHERE i.anio_academico = 2019 GROUP BY i.asignatura_id ) ss ON a.id = ss.asignatura_id
WHERE s.submitdate is NOT null
GROUP BY a.descripcion, p.nombre, ap.cargo, c.description, a.nivel
