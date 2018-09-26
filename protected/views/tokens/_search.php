<?php
/* @var $this TokensController */
/* @var $model Tokens */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tid'); ?>
		<?php echo $form->textField($model,'tid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'participant_id'); ?>
		<?php echo $form->textField($model,'participant_id',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textArea($model,'email',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emailstatus'); ?>
		<?php echo $form->textArea($model,'emailstatus',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'token'); ?>
		<?php echo $form->textField($model,'token',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'language'); ?>
		<?php echo $form->textField($model,'language',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blacklisted'); ?>
		<?php echo $form->textField($model,'blacklisted',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sent'); ?>
		<?php echo $form->textField($model,'sent',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remindersent'); ?>
		<?php echo $form->textField($model,'remindersent',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'remindercount'); ?>
		<?php echo $form->textField($model,'remindercount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'completed'); ?>
		<?php echo $form->textField($model,'completed',array('size'=>17,'maxlength'=>17)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usesleft'); ?>
		<?php echo $form->textField($model,'usesleft'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validfrom'); ?>
		<?php echo $form->textField($model,'validfrom'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'validuntil'); ?>
		<?php echo $form->textField($model,'validuntil'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mpid'); ?>
		<?php echo $form->textField($model,'mpid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->