<?php

// query para obtener las preguntas
$preguntas = "SELECT
  CASE
    WHEN c.qid IS NULL
      THEN CONCAT(p.sid, 'X', p.gid, 'X', p.qid)                -- padre sin hijo
    ELSE CONCAT(p.sid, 'X', p.gid, 'X', p.qid, c.title)          -- padre + subpregunta
  END AS response_column,
  p.sid,
  p.gid,
  p.qid          AS parent_qid,
  p.title        AS parent_code,
  p.question     AS parent_text,
  c.qid          AS sub_qid,
  c.title        AS sub_code,
  c.question     AS sub_text,
  p.question_order,
  c.question_order AS sub_order
FROM questions p
LEFT JOIN questions c
       ON c.parent_qid = p.qid
      AND c.language   = p.language
WHERE p.sid=20251
  AND p.parent_qid = 0
ORDER BY p.gid, p.question_order, COALESCE(c.question_order, 0);"


