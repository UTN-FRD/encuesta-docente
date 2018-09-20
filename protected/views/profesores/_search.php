<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'id', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'id', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'nombre', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'nombre',array('class'=>'form-control','maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'apellido', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'apellido',array('class'=>'form-control','maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'cargo', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'cargo',array('class'=>'form-control','maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'legajo', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'legajo', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'dni', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'dni',array('class'=>'form-control','maxlength'=>10)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'fecha_ingreso', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'fecha_ingreso', array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->