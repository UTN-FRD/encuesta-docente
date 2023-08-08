<?php
/* @var $this Survey164846Controller */
/* @var $model Survey164846 */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'survey164846-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'submitdate'); ?>
		<?php echo $form->textField($model,'submitdate'); ?>
		<?php echo $form->error($model,'submitdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastpage'); ?>
		<?php echo $form->textField($model,'lastpage'); ?>
		<?php echo $form->error($model,'lastpage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startlanguage'); ?>
		<?php echo $form->textField($model,'startlanguage',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'startlanguage'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seed'); ?>
		<?php echo $form->textField($model,'seed',array('size'=>31,'maxlength'=>31)); ?>
		<?php echo $form->error($model,'seed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ipaddr'); ?>
		<?php echo $form->textArea($model,'ipaddr',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ipaddr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'a'); ?>
		<?php echo $form->textArea($model,'a',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'a'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'b'); ?>
		<?php echo $form->textArea($model,'b',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'b'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'c'); ?>
		<?php echo $form->textArea($model,'c',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'d'); ?>
		<?php echo $form->textArea($model,'d',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'d'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'e'); ?>
		<?php echo $form->textArea($model,'e',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'e'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'f'); ?>
		<?php echo $form->textArea($model,'f',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'f'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'g'); ?>
		<?php echo $form->textArea($model,'g',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'g'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asignatura_profesor_id'); ?>
		<?php echo $form->textField($model,'asignatura_profesor_id'); ?>
		<?php echo $form->error($model,'asignatura_profesor_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->