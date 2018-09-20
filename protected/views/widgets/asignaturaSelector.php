<div class="form-group">
	<?php echo $form->labelEx($model,'asignatura_id', array('style'=>'text-align:left')); ?>
	<?php echo $form->dropDownList(
			$model,'asignatura_id',
			CHtml::listData(Asignaturas::model()->findall(array('order'=>'`plan` ASC, descripcion ASC')),"id","descripcion","plan"),
			array('empty'=>'Todos','class'=>'form-control')
			); ?>

	<?php echo $form->error($model,'asignatura_id'); ?>
</div>
