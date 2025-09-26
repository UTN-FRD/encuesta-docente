<?php
/* Variables:
 * $sid, $g (group), $p (parent question), $children (array)
 */
$type = $p['type']; // código LimeSurvey
$gid  = (int)$g['gid'];
$pqid = (int)$p['qid'];

$baseSgqa = SgqaHelper::base($sid, $gid, $pqid);

// Render básico para algunos tipos comunes.
// Ampliá con más tipos según necesites.
switch ($type) {
  case 'S': // texto corto
  case 'T': // texto largo
    $inputType = ($type==='S') ? 'text' : 'textarea';
    if ($inputType==='text') {
      echo '<input name="resp['.$baseSgqa.']" type="text" style="width:50%;">';
    } else {
      echo '<textarea name="resp['.$baseSgqa.']" rows="3" style="width:70%;"></textarea>';
    }
    break;

  case 'L': // Lista (una opción)
  case 'O': // Lista con "otro"
  case '!': // Lista con comentario (ajustá si tu versión lo usa)
    // Opciones = children (para algunas variantes) o answers de la pregunta
    // En muchas encuestas tipo L/O las opciones vienen como "subpreguntas" (children) con title=code
    if (!empty($children)) {
      echo '<select name="resp['.$baseSgqa.']">';
      echo '<option value="">--</option>';
      foreach ($children as $c) {
        echo '<option value="'.CHtml::encode($c['title']).'">'.CHtml::encode(strip_tags($c['question'])).'</option>';
      }
      echo '</select>';
    } else {
      // Si no hay children, podrías precargar answers por SQL o get_question_properties
      echo '<input type="text" name="resp['.$baseSgqa.']" placeholder="code opción">';
    }
    // Campo "other" (opcional, si tu encuesta lo usa)
    if ($type==='O') {
      echo ' Otro: <input type="text" name="resp['.$baseSgqa.'other]">';
    }
    break;

  case 'M': // Múltiple (checkbox por subpregunta)
    if (!empty($children)) {
      foreach ($children as $c) {
        $sgqa = SgqaHelper::forChild($sid, $gid, $pqid, $c['title']);
        echo '<label style="display:block;">';
        echo '<input type="checkbox" name="resp['.$sgqa.']" value="Y"> ';
        echo CHtml::encode(strip_tags($c['question']));
        echo '</label>';
      }
    } else {
      echo '<em>Sin subpreguntas configuradas.</em>';
    }
    break;

  // Agregá tipos: 'N' (número), 'D' (fecha), matrices 'A','B','C','F','E', etc.
  default:
    echo '<em>Tipo no implementado: '.$type.'</em> ';
    echo '<input type="text" name="resp['.$baseSgqa.']" placeholder="valor">';
}
