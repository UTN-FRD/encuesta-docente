<?php
/* @var $this ProfesoresController */
/* @var $model Profesores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="hide">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->dropDownList($model,'cargo',array(1=>'Titular',2=>'Auxiliar'),array('empty' => '(Seleccione)'),array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'legajo'); ?>
		<?php echo $form->textField($model,'legajo'); ?>
		<?php echo $form->error($model,'legajo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fecha_ingreso'); ?>
		<?php echo $form->dateField($model,'fecha_ingreso'); ?>
		<?php echo $form->error($model,'fecha_ingreso'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->