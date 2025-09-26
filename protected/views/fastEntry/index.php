
<?php
/* @var $groups array */
/* @var $byParent array (parent_qid => questions[]) */

Yii::app()->clientScript->registerCoreScript('jquery');
?>

<h1>Ingreso a encuestas #<?php echo CHtml::encode($sid); ?></h1>

<?php if(Yii::app()->user->hasFlash('success')): ?>
  <div class="flash-success"><?php echo Yii::app()->user->getFlash('success'); ?></div>
<?php endif; ?>
<?php if(Yii::app()->user->hasFlash('error')): ?>
  <div class="flash-error"><?php echo Yii::app()->user->getFlash('error'); ?></div>
<?php endif; ?>

<?php echo $this->renderPartial('_toolbar', compact('sid','lang','token')); ?>

<?php
// Debug visible
$groupsCount    = is_array($groups) ? count($groups) : 0;
$parentsCount   = isset($byParent[0]) && is_array($byParent[0]) ? count($byParent[0]) : 0;
$langUsed       = isset($lang) ? $lang : 'n/a';
if (isset($this->vars['langUsed'])) $langUsed = $this->vars['langUsed']; // por si lo pasás desde el controller
?>
<div style="padding:6px 10px;margin:8px 0;background:#f3f7ff;border:1px solid #cfe0ff;">
  <small>Debug: lang usado: <b><?php echo CHtml::encode($lang); ?></b> &nbsp;|&nbsp;
  grupos: <b><?php echo $groupsCount; ?></b> &nbsp;|&nbsp;
  preguntas raíz: <b><?php echo $parentsCount; ?></b></small>
</div>

<form method="post" action="<?php echo $this->createUrl('fastEntry/submit'); ?>">
  <input type="hidden" name="sid" value="<?php echo (int)$sid; ?>">
  <input type="hidden" name="lang" value="<?php echo CHtml::encode($lang); ?>">
  <input type="hidden" name="token" value="<?php echo CHtml::encode($token); ?>">

<?php
// Siempre tener un array iterable:
$groupsSafe = is_array($groups) ? $groups : array();
?>

<?php foreach ($groupsSafe as $gRaw): ?>
  <?php
    // Normalizar el grupo a array
    $g = is_array($gRaw) ? $gRaw : (is_object($gRaw) ? get_object_vars($gRaw) : array());

    // gid
    $gid = 0;
    if (isset($g['gid'])) {
      $gid = (int)$g['gid'];
    } elseif (isset($g['id'])) {
      $gid = (int)$g['id'];
    }

    // nombre del grupo (varias formas según versión)
    $groupName = '';
    if (isset($g['group_name']) && $g['group_name'] !== '') {
      $groupName = $g['group_name'];
    } elseif (isset($g['group_name_l10ns']) && is_array($g['group_name_l10ns']) && isset($g['group_name_l10ns'][$lang])) {
      $groupName = $g['group_name_l10ns'][$lang];
    } elseif (isset($g['description'])) {
      $groupName = $g['description'];
    } else {
      $groupName = 'Grupo ' . $gid;
    }

    // padres de este grupo (parent_qid = 0)
    $parentsSource = (isset($byParent[0]) && is_array($byParent[0])) ? $byParent[0] : array();
    $parents = array();
    foreach ($parentsSource as $q) {
      if (isset($q['gid']) && (int)$q['gid'] === $gid) {
        $parents[] = $q;
      }
    }
  ?>

  <fieldset style="margin: 16px 0; border:1px solid #ccc; padding:12px;">
    <legend><?php echo CHtml::encode($groupName); ?></legend>

    <?php foreach ($parents as $p): ?>
      <div style="margin-bottom:10px;">
        <div>
          <strong><?php echo CHtml::encode(isset($p['title']) ? $p['title'] : ''); ?></strong>
          - <?php echo CHtml::encode(strip_tags(isset($p['question']) ? $p['question'] : '')); ?>
        </div>

        <?php
          $pid = isset($p['qid']) ? (int)$p['qid'] : 0;
          $children = (isset($byParent[$pid]) && is_array($byParent[$pid])) ? $byParent[$pid] : array();

          echo $this->renderPartial(
            '_field_input',
            array('sid'=>$sid, 'g'=>$g, 'p'=>$p, 'children'=>$children),
            true
          );
        ?>
      </div>
    <?php endforeach; ?>
  </fieldset>
<?php endforeach; ?>

  <button type="submit">Grabar respuesta</button>
</form>
