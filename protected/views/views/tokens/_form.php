<?php
/* @var $this TokensController */
/* @var $model Tokens */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tokens-form',
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
		<?php echo $form->labelEx($model,'emailstatus'); ?>
		<?php echo $form->textArea($model,'emailstatus',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'emailstatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'token'); ?>
		<?php echo $form->textField($model,'token',array('size'=>35,'maxlength'=>35)); ?>
		<?php echo $form->error($model,'token'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'language'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blacklisted'); ?>
		<?php echo $form->textField($model,'blacklisted',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'blacklisted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sent'); ?>
		<?php echo $form->textField($model,'sent',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'sent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remindersent'); ?>
		<?php echo $form->textField($model,'remindersent',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'remindersent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remindercount'); ?>
		<?php echo $form->textField($model,'remindercount'); ?>
		<?php echo $form->error($model,'remindercount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'completed'); ?>
		<?php echo $form->textField($model,'completed',array('size'=>17,'maxlength'=>17)); ?>
		<?php echo $form->error($model,'completed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usesleft'); ?>
		<?php echo $form->textField($model,'usesleft'); ?>
		<?php echo $form->error($model,'usesleft'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'validfrom'); ?>
		<?php echo $form->textField($model,'validfrom'); ?>
		<?php echo $form->error($model,'validfrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'validuntil'); ?>
		<?php echo $form->textField($model,'validuntil'); ?>
		<?php echo $form->error($model,'validuntil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mpid'); ?>
		<?php echo $form->textField($model,'mpid'); ?>
		<?php echo $form->error($model,'mpid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->