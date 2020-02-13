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

-- cantidad de alumnos
2018 -> 1388
2019 -> 897
2018+2019 -> 2285

xinscripciones
2018 -> 1478
2019 -> 905
2018+2019 -> 2383
SELECT i.participant_id, i.anio_academico, count(1)
FROM incripciones i 
WHERE i.anio_academico = 2019
GROUP BY 1,2

-- cantidad de alumnos por carrera
SELECT ss.description, count(ss.alumno)
from (SELECT i.participant_id as alumno, c.description
FROM incripciones i 
  JOIN asignaturas a on i.asignatura_id = a.id
  JOIN carreras c on a.carrera_id = c.id
WHERE i.anio_academico = 2019
group by 1) ss
GROUP BY 1

Ingeniería Eléctrica
145
Ingeniería en Sistemas de Información
330
Ingeniería Mecánica
197
Ingeniería Química
232

-- cantidad de alumnos por carrera y nivel
SELECT ss.description, ss.nivel, count(ss.alumno)
from (SELECT i.participant_id as alumno, c.description, a.nivel
FROM incripciones i 
  JOIN asignaturas a on i.asignatura_id = a.id
  JOIN carreras c on a.carrera_id = c.id
WHERE i.anio_academico = 2019
group by 1) ss
GROUP BY 1, 2


"Ingeniería Eléctrica","0","8"
"Ingeniería Eléctrica","1","48"
"Ingeniería Eléctrica","2","30"
"Ingeniería Eléctrica","3","25"
"Ingeniería Eléctrica","4","14"
"Ingeniería Eléctrica","5","20"
"Ingeniería en Sistemas de Información","1","184"
"Ingeniería en Sistemas de Información","2","72"
"Ingeniería en Sistemas de Información","3","36"
"Ingeniería en Sistemas de Información","4","23"
"Ingeniería en Sistemas de Información","5","15"
"Ingeniería Mecánica","0","13"
"Ingeniería Mecánica","1","72"
"Ingeniería Mecánica","2","25"
"Ingeniería Mecánica","3","21"
"Ingeniería Mecánica","4","24"
"Ingeniería Mecánica","5","42"
"Ingeniería Química","0","8"
"Ingeniería Química","1","75"
"Ingeniería Química","2","37"
"Ingeniería Química","3","39"
"Ingeniería Química","4","33"
"Ingeniería Química","5","40"


TOKEN
[asignatura_profesor_id][dni]
GZZGSSFGKLD
41134782

-- encrypt token
SELECT replace(replace(replace(replace(replace(replace(replace(replace(replace(replace('41134782', '0', 'A'), '1', 'S'), '2', 'D'),'3','F'),'4','G'),'5','H'),'6','J'),'7','K'),'8','L'),'9','Z')
FROM dual

-- decrypt token
SELECT replace(replace(replace(replace(replace(replace(replace(replace(replace(replace('GSSFGKLD','A','0'),'S','1'),'D','2'),'F','3'),'G','4'),'H','5'),'J','6'),'K','7'),'L','8'),'Z','9')
FROM dual


-- cantidad de alumnos que participaron: 210
select distinct p.firstname, c.description, count(ss1.asignatura_profesor)
from participants p join
(select replace(replace(replace(replace(replace(replace(replace(replace(replace(replace(ss.ap_encrypt,'A','0'),'S','1'),'D','2'),'F','3'),'G','4'),'H','5'),'J','6'),'K','7'),'L','8'),'Z','9') as asignatura_profesor,  replace(replace(replace(replace(replace(replace(replace(replace(replace(replace(ss.dni_encrypt,'A','0'),'S','1'),'D','2'),'F','3'),'G','4'),'H','5'),'J','6'),'K','7'),'L','8'),'Z','9')  as dni
from 
(select REPLACE(t.token, RIGHT(t.token, 8), '') as ap_encrypt, RIGHT(t.token, 8) as dni_encrypt
FROM tokens_20191 t
WHERE t.usesleft = 0
union 
select REPLACE(t.token, RIGHT(t.token, 8), '') as ap_encrypt, RIGHT(t.token, 8) as dni_encrypt
FROM tokens_20192 t
WHERE t.usesleft = 0
union 
select REPLACE(t.token, RIGHT(t.token, 8), '') as ap_encrypt, RIGHT(t.token, 8) as dni_encrypt
FROM tokens_20193 t
WHERE t.usesleft = 0) ss ) ss1
on ss1.dni = p.dni
join carreras c on p.carrera_id = c.id
group by 1,2




-- cantidad de alumnos que participaron por carrera


-- cantidad de alumnos que participaron por carrera y nivel


