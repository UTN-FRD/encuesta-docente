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

	<div class="row">
		<?php echo $form->label($model,'asignatura_id'); ?>
		<?php echo $form->textField($model,'asignatura_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesor_id'); ?>
		<?php echo $form->textField($model,'profesor_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->