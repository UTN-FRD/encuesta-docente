<?php
/* @var $this ParticipantsController */
/* @var $model Participants */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'participant_id', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'participant_id', array('class'=>'form-control', 'maxlength'=>50)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'firstname', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'firstname', array('class'=>'form-control', 'maxlength'=>150)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'email', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'email', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'dni', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'dni', array('class'=>'form-control', 'maxlength'=>10)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'legajo', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'legajo', array('class'=>'form-control', 'maxlength'=>10)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'anio_ingreso', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'anio_ingreso', array('class'=>'form-control', 'maxlength'=>10)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'especialidad_plan', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'especialidad_plan', array('class'=>'form-control', 'maxlength'=>10)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'carrera_id', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'carrera_id', array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->