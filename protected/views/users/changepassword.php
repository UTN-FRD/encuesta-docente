<h1>Cambiar Contraseña</h1>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'change-password-form',
			'enableClientValidation' => true,
			'htmlOptions' => array('class' => 'well'),
			'clientOptions' => array(
			'validateOnSubmit' => true,
			),
	 ));
?>

  <div> <?php echo $form->labelEx($model,'old_password'); ?> <?php echo $form->passwordField($model,'old_password'); ?> <?php echo $form->error($model,'old_password'); ?> </div>

  <div> <?php echo $form->labelEx($model,'new_password'); ?> <?php echo $form->passwordField($model,'new_password'); ?> <?php echo $form->error($model,'new_password'); ?> </div>

  <div> <?php echo $form->labelEx($model,'repeat_password'); ?> <?php echo $form->passwordField($model,'repeat_password'); ?> <?php echo $form->error($model,'repeat_password'); ?> </div>

  <div>
		<?php echo CHtml::submitButton('Guardar',array("class"=>"btn btn-primary btn-large")); ?>
    </div>
  <?php $this->endWidget(); ?>
</div>