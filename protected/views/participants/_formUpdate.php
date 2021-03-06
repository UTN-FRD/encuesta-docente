<?php
/* @var $this ParticipantsController */
/* @var $model Participants */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'participants-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>


	<div>
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div>
<!--	<?php echo $form->labelEx($model,'blacklisted'); ?> -->
		<?php echo $form->hiddenField($model,'blacklisted',array('value'=>'0', 'readonly' => 'true'),array('size'=>1,'maxlength'=>1)); ?>
<!--		<?php echo $form->error($model,'blacklisted'); ?> -->
	</div>

	<div>
		<?php echo $form->labelEx($model,'dni'); ?>
		<?php echo $form->textField($model,'dni',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dni'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'legajo'); ?>
		<?php echo $form->textField($model,'legajo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'legajo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'anio_ingreso'); ?>
		<?php echo $form->textField($model,'anio_ingreso',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'anio_ingreso'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'especialidad_plan'); ?>
		<?php echo $form->textField($model,'especialidad_plan',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'especialidad_plan'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'carrera_id'); ?>
		<?php echo $form->dropDownList($model,'carrera_id',CHtml::listData(Carreras::model()->findall(),"id","description")); ?>
		<!--<?php echo $form->textField($model,'carrera_id'); ?>-->
		<?php echo $form->error($model,'carrera_id'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->