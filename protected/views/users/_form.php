<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'users_name'); ?>
		<?php echo $form->textField($model,'users_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'users_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textArea($model,'password',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'full_name'); ?>
		<?php echo $form->textField($model,'full_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'full_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parent_id'); ?>
		<?php echo $form->textField($model,'parent_id'); ?>
		<?php echo $form->error($model,'parent_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lang'); ?>
		<?php echo $form->textField($model,'lang',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>192)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'htmleditormode'); ?>
		<?php echo $form->textField($model,'htmleditormode',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'htmleditormode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'templateeditormode'); ?>
		<?php echo $form->textField($model,'templateeditormode',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'templateeditormode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'questionselectormode'); ?>
		<?php echo $form->textField($model,'questionselectormode',array('size'=>7,'maxlength'=>7)); ?>
		<?php echo $form->error($model,'questionselectormode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'one_time_pw'); ?>
		<?php echo $form->textArea($model,'one_time_pw',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'one_time_pw'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateformat'); ?>
		<?php echo $form->textField($model,'dateformat'); ?>
		<?php echo $form->error($model,'dateformat'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->