<?php
/* @var $this ParticipantsController */
/* @var $model Participants */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'participants-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'participant_id'); ?>
		<?php echo $form->textField($model,'participant_id',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'participant_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textArea($model,'email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blacklisted'); ?>
		<?php echo $form->textField($model,'blacklisted',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'blacklisted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'owner_uid'); ?>
		<?php echo $form->textField($model,'owner_uid'); ?>
		<?php echo $form->error($model,'owner_uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created'); ?>
		<?php echo $form->textField($model,'created'); ?>
		<?php echo $form->error($model,'created'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified'); ?>
		<?php echo $form->textField($model,'modified'); ?>
		<?php echo $form->error($model,'modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'legajo'); ?>
		<?php echo $form->textField($model,'legajo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'legajo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anio_ingreso'); ?>
		<?php echo $form->textField($model,'anio_ingreso',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'anio_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad_plan'); ?>
		<?php echo $form->textField($model,'especialidad_plan',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'especialidad_plan'); ?>
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