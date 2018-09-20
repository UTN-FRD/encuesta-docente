<?php
/* @var $this AsignaturasController */
/* @var $model Asignaturas */
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
		<?php echo $form->label($model,'descripcion', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'descripcion', array('class'=>'form-control', 'maxlength'=>255)); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'electiva', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'electiva', array('class'=>'form-control')); ?>
	</div>

	<div class="form-group">
		<?php echo $form->label($model,'plan', array('style'=>'text-align:left')); ?>
		<?php echo $form->textField($model,'plan', array('class'=>'form-control', 'maxlength'=>255)); ?>
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