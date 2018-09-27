<div class="form-group">
	<?php echo $form->labelEx($model,'cargo', array('style'=>'text-align:left')); ?>
	<?php echo $form->dropDownList(
			$model,'cargo',
			array('Titular'=>'Titular','Auxiliar'=>'Auxiliar'),
			array('empty'=>'Seleccione','class'=>'form-control')
			); ?>
	<?php echo $form->error($model,'cargo'); ?>
</div>
