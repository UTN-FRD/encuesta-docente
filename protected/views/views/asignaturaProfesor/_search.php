<?php
/* @var $this AsignaturaProfesorController */
/* @var $model AsignaturaProfesor */
/* @var $form CActiveForm */
?>

<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<?php $this->renderPartial('../widgets/asignaturaSelector',array(
		'model'=>$model,
		'form'=>$form
	)); ?>

	<?php $this->renderPartial('../widgets/profesorSelector',array(
		'model'=>$model,
		'form'=>$form
	)); ?>

	<div class="row ">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->