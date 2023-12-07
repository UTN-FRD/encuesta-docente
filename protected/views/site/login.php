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
<button type="button" class="btn btn-danger pull-right" data-toggle="modal" data-target="#helpModal">?</button>
<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
		<video width="100%" height="500" controls>
		  <source src="/login.mp4" type="video/mp4">
		Your browser does not support the video tag.
		</video>
      </div>
    </div>
  </div>
</div>
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
	</div>

	<div>
		<?php echo $form->labelEx($model,'Contrase&ntilde;a:'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<!-- <p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p> -->
	</div>

	<!-- <div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div> -->

	<a href="#" data-toggle="popover" data-placement="bottom" data-content="Comuníquese con SAE a través de sae@frd.utn.edu.ar">Olvidé mi contraseña</a>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Entrar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>


<?php $this->endWidget(); ?>
</div><!-- form -->

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
    $("#login-form").attr("autocomplete","off");   
});
</script>