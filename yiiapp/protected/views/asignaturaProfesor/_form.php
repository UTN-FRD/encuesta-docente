<?php
/* @var $this AsignaturaProfesorController */
/* @var $model AsignaturaProfesor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asignatura-profesor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'asignatura_id'); ?>
		<?php echo $form->dropDownList($model,'asignatura_id',CHtml::listData(Asignaturas::model()->findall(),"id","descripcion")); ?>
		<!-- <?php echo $form->textField($model,'asignatura_id'); ?> -->
		<?php echo $form->error($model,'asignatura_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'profesor_id'); ?>
		<?php echo $form->dropDownList($model,'profesor_id',CHtml::listData(Profesores::model()->findall(),"id","nombre")); ?>
		<!-- <?php echo $form->textField($model,'profesor_id'); ?> -->
		<?php echo $form->error($model,'profesor_id'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
