<?php
/* @var $sid int */
/* @var $lang string */
/* @var $token string|null */
?>
<div style="margin: 10px 0; padding: 8px; background: #f7f7f7; border: 1px solid #ddd;">
  <form method="get" action="">
    <input type="hidden" name="r" value="fastEntry/index">
    <label>Encuesta (SID):
      <input type="number" name="sid" value="<?php echo (int)$sid; ?>" style="width:120px;">
    </label>
    <label>Idioma:
      <input type="text" name="lang" value="<?php echo CHtml::encode($lang); ?>" style="width:60px;">
    </label>
    <label>Token:
      <input type="text" name="token" value="<?php echo CHtml::encode($token); ?>" style="width:180px;">
    </label>
    <button type="submit">Cargar</button>
  </form>
</div>
