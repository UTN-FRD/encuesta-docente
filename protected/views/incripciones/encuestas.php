<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h2>Encuestas pendientes de completar</h2>

<div>
<?php
$usuario = Yii::app()->user->name;
$array = array('A','B','C','D','E','F');
foreach($array as $elemento){ ?>
        <?php echo CHtml::button('Encuesta '.$elemento.' de '.$usuario,array("class"=>"btn btn-primary btn-large", "style"=>"width:100%;margin:5px")); ?>
<?php } ?>

</div>