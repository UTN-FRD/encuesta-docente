<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'incripciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'participant_id'); ?>
		<?php echo $form->textField($model,'participant_id',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'participant_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'asignatura_id'); ?>
		<?php echo $form->textField($model,'asignatura_id'); ?>
		<?php echo $form->error($model,'asignatura_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'anio_academico'); ?>
		<?php echo $form->textField($model,'anio_academico'); ?>
		<?php echo $form->error($model,'anio_academico'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'comentarios'); ?>
		<?php echo $form->textField($model,'comentarios',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'comentarios'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->