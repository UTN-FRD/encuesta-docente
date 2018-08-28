<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'participant_id'); ?>
		<?php echo $form->textField($model,'participant_id',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asignatura_id'); ?>
		<?php echo $form->textField($model,'asignatura_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_academico'); ?>
		<?php echo $form->textField($model,'anio_academico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentarios'); ?>
		<?php echo $form->textField($model,'comentarios',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->