<?php
/* @var $this IncripcionesController */
/* @var $data Incripciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('participant_id')); ?>:</b>
	<?php echo CHtml::encode($data->participant_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asignatura_id')); ?>:</b>
	<?php echo CHtml::encode($data->asignatura_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_academico')); ?>:</b>
	<?php echo CHtml::encode($data->anio_academico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comentarios')); ?>:</b>
	<?php echo CHtml::encode($data->comentarios); ?>
	<br />


</div>