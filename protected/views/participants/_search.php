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

	<div class="row">
		<?php echo $form->label($model,'participant_id'); ?>
		<?php echo $form->textField($model,'participant_id',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'legajo'); ?>
		<?php echo $form->textField($model,'legajo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_ingreso'); ?>
		<?php echo $form->textField($model,'anio_ingreso',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'especialidad_plan'); ?>
		<?php echo $form->textField($model,'especialidad_plan',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'carrera_id'); ?>
		<?php echo $form->textField($model,'carrera_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->