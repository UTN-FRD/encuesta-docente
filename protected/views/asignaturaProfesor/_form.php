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

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php $this->renderPartial('../widgets/asignaturaSelector',array(
		'model'=>$model,
		'form'=>$form
	)); ?>

	<?php $this->renderPartial('../widgets/profesorSelector',array(
		'model'=>$model,
		'form'=>$form
	)); ?>

	<?php $this->renderPartial('../widgets/cargoSelector',array(
		'model'=>$model,
		'form'=>$form
	)); ?>


	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
