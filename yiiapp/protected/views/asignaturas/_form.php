<?php
/* @var $this AsignaturasController */
/* @var $model Asignaturas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asignaturas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'electiva'); ?>
		<?php echo $form->textField($model,'electiva'); ?>
		<?php echo $form->error($model,'electiva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plan'); ?>
		<?php echo $form->textField($model,'plan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'plan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carrera_id'); ?>
		<?php echo $form->textField($model,'carrera_id'); ?>
		<?php echo $form->error($model,'carrera_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->