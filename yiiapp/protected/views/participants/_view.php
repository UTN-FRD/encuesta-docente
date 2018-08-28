<?php
/* @var $this ParticipantsController */
/* @var $data Participants */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('participant_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->participant_id), array('view', 'id'=>$data->participant_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('firstname')); ?>:</b>
	<?php echo CHtml::encode($data->firstname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastname')); ?>:</b>
	<?php echo CHtml::encode($data->lastname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('language')); ?>:</b>
	<?php echo CHtml::encode($data->language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blacklisted')); ?>:</b>
	<?php echo CHtml::encode($data->blacklisted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_uid')); ?>:</b>
	<?php echo CHtml::encode($data->owner_uid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dni')); ?>:</b>
	<?php echo CHtml::encode($data->dni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('legajo')); ?>:</b>
	<?php echo CHtml::encode($data->legajo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anio_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->anio_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad_plan')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrera_id')); ?>:</b>
	<?php echo CHtml::encode($data->carrera_id); ?>
	<br />

	*/ ?>

</div>