<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php
$usuario = Yii::app()->user->name;
$array = array('A','B','C','D','E','F');
foreach($array as $elemento){ ?>
    <p align="center"><tr>
        <?php echo CHtml::button('Encuesta '.$elemento.' de '.$usuario,array("class"=>"btn btn-primary btn-large")); ?>
    </tr></p>
<?php } ?>
