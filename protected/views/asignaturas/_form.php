<?php
/* @var $this AsignaturasController */
/* @var $model Asignaturas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'asignaturas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'electiva'); ?>
		<?php echo $form->textField($model,'electiva'); ?>
		<?php echo $form->error($model,'electiva'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'plan'); ?>
		<?php echo $form->textField($model,'plan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'plan'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nivel'); ?>
		<?php echo $form->textField($model,'nivel'); ?>
		<?php echo $form->error($model,'nivel'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'comision'); ?>
		<?php echo $form->textField($model,'comision'); ?>
		<?php echo $form->error($model,'comision'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'departamento'); ?>
		<?php echo $form->dropDownList($model,'departamento_id',CHtml::listData(Departamentos::model()->findall(),"id","descripcion")); ?>
		<?php echo $form->error($model,'departamento_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'carrera_id'); ?>
		<?php echo $form->dropDownList($model,'carrera_id',CHtml::listData(Carreras::model()->findall(),"id","description")); ?>
		<?php echo $form->error($model,'carrera_id'); ?>
	</div>
	
	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->