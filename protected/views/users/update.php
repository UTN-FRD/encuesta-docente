<h1>Cambiar </h1>

<div class="form">

<?php $form = $this->beginWidget('CActiveForm', array(
			'id' => 'chnage-password-form',
			'enableClientValidation' => true,
			'clientOptions' => array(
				'validateOnSubmit' => true,
			),
	 ));
?>

  <div> <?php echo $form->labelEx($model,'new_password'); ?> <?php echo $form->passwordField($model,'new_password'); ?> <?php echo $form->error($model,'new_password'); ?> </div>

  <div> <?php echo $form->labelEx($model,'repeat_password'); ?> <?php echo $form->passwordField($model,'repeat_password'); ?> <?php echo $form->error($model,'repeat_password'); ?> </div>

  <div>
		<?php echo CHtml::submitButton('Guardar',array("class"=>"btn btn-primary btn-large")); ?>
    </div>
  <?php $this->endWidget(); ?>
</div>