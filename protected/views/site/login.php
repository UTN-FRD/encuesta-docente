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
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
//$this->breadcrumbs=array(
//	'Login',
//);
?>
<h1>
	UTN - FRD <br>
	Sistema de Encuestas Estudiantes
</h1>

<!-- <p>Please fill out the following form with your login credentials:</p> -->

<div class="form" autocomplete="off">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<!-- <p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<div>
		<?php echo $form->labelEx($model,'Usuario:'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
		<p class="hint">Utilice su DNI como usuario.</p>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Contrase&ntilde;a:'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<!-- <div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div> -->

	<a href="<?php echo $this->createUrl('site/recoverPassword'); ?>" class="forgot-password-link">Olvidé mi contraseña</a>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Entrar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>


<?php $this->endWidget(); ?>
</div><!-- form -->

<script>
$(document).ready(function(){
    $("#login-form").attr("autocomplete","off");   
});
</script>

<style>
.forgot-password-link {
    display: inline-block;
    margin-bottom: 15px;
    color: #337ab7;
    text-decoration: none;
}

.forgot-password-link:hover {
    color: #23527c;
    text-decoration: underline;
}
</style>