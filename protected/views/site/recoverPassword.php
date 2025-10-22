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

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<h1>
				UTN - FRD <br>
				Sistema de Encuestas Estudiantes
			</h1>

			<h2>Generar o Recuperar Contraseña</h2>

			<p>Ingresa tu número de documento y correo electrónico para recuperar tu contraseña, recibirás un correo electrónico con una nueva contraseña que podrás cambiar luego.</p>

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
					<p>Ingresá el mismo correo electrónico que utilizás en el Campus Virtual (CVG).</p>
					<?php echo $form->emailField($model,'email', array('class'=>'form-control')); ?>
					<?php echo $form->error($model,'email'); ?>
				</div>

				<div class="row buttons">
					<?php echo CHtml::submitButton('Recuperar Contraseña', array('class'=>'btn btn-primary btn-large')); ?>
					<?php echo CHtml::link('Volver al Login', array('site/login'), array('class'=>'btn btn-secondary')); ?>
				</div>

			<?php $this->endWidget(); ?>
			</div><!-- form -->
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
    $("#recover-password-form").attr("autocomplete","off");   
});
</script>

</body>
</html>