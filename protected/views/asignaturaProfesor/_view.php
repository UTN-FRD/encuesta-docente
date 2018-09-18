<?php
/* @var $this AsignaturaProfesorController */
/* @var $data AsignaturaProfesor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asignatura_id')); ?>:</b>
	<?php echo CHtml::encode($data->asignatura_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesor_id')); ?>:</b>
	<?php echo CHtml::encode($data->profesor_id); ?>
	<br />


</div>