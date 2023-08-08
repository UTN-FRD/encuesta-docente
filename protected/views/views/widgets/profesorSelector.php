<div class="form-group">
	<?php echo $form->labelEx($model,'profesor_id', array('style'=>'text-align:left')); ?>
	<?php echo $form->dropDownList(
			$model,
			'profesor_id',
			CHtml::listData(Profesores::model()->findall(array('order'=>'nombre ASC')),"id","nombre"),
			array('empty'=>'Todos','class'=>'form-control')); ?>
			
	<!-- <?php echo $form->textField($model,'profesor_id'); ?> -->
	<?php echo $form->error($model,'profesor_id'); ?>
</div>
