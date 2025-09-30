<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
/* @var $this SiteController */
/* @var $model RecoverPasswordForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Recuperar Contraseña';
?>

<h1>
	UTN - FRD <br>
	Sistema de Encuestas Estudiantes
</h1>

<h2>Recuperar Contraseña</h2>

<p>Ingrese su DNI y correo electrónico para recuperar su contraseña:</p>
<p><strong>Nota:</strong> Si no tiene un correo registrado en el sistema, se guardará el que proporcione para futuras comunicaciones.</p>

<!-- Mostrar mensajes flash -->
<?php if(Yii::app()->user->hasFlash('success')): ?>
<div class="alert alert-success">
	<?php echo Yii::app()->user->getFlash('success'); ?>
</div>
<?php endif; ?>

<?php if(Yii::app()->user->hasFlash('error')): ?>
<div class="alert alert-danger">
	<?php echo Yii::app()->user->getFlash('error'); ?>
</div>
<?php endif; ?>

<div class="form" autocomplete="off">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recover-password-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'username'); ?>
		<p class="hint">Ingrese su DNI (número de documento).</p>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model,'email', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'email'); ?>
		<p class="hint">Si ya tiene un correo registrado, debe coincidir. Si no, se guardará este correo en el sistema.</p>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Recuperar Contraseña', array('class'=>'btn btn-primary btn-large')); ?>
		<?php echo CHtml::link('Volver al Login', array('site/login'), array('class'=>'btn btn-secondary')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<script>
$(document).ready(function(){
    $("#recover-password-form").attr("autocomplete","off");   
});
</script>

</body>
</html>