<?php
/* @var $this Survey164846Controller */
/* @var $model Survey164846 */
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
		<?php echo $form->label($model,'submitdate'); ?>
		<?php echo $form->textField($model,'submitdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastpage'); ?>
		<?php echo $form->textField($model,'lastpage'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startlanguage'); ?>
		<?php echo $form->textField($model,'startlanguage',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seed'); ?>
		<?php echo $form->textField($model,'seed',array('size'=>31,'maxlength'=>31)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ipaddr'); ?>
		<?php echo $form->textArea($model,'ipaddr',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'a'); ?>
		<?php echo $form->textArea($model,'a',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'b'); ?>
		<?php echo $form->textArea($model,'b',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c'); ?>
		<?php echo $form->textArea($model,'c',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'d'); ?>
		<?php echo $form->textArea($model,'d',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'e'); ?>
		<?php echo $form->textArea($model,'e',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'f'); ?>
		<?php echo $form->textArea($model,'f',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'g'); ?>
		<?php echo $form->textArea($model,'g',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asignatura_profesor_id'); ?>
		<?php echo $form->textField($model,'asignatura_profesor_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->