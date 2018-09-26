<?php
/* @var $this TokensController */
/* @var $data Tokens */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tid), array('view', 'id'=>$data->tid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('participant_id')); ?>:</b>
	<?php echo CHtml::encode($data->participant_id); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailstatus')); ?>:</b>
	<?php echo CHtml::encode($data->emailstatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('token')); ?>:</b>
	<?php echo CHtml::encode($data->token); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('language')); ?>:</b>
	<?php echo CHtml::encode($data->language); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blacklisted')); ?>:</b>
	<?php echo CHtml::encode($data->blacklisted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sent')); ?>:</b>
	<?php echo CHtml::encode($data->sent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remindersent')); ?>:</b>
	<?php echo CHtml::encode($data->remindersent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remindercount')); ?>:</b>
	<?php echo CHtml::encode($data->remindercount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('completed')); ?>:</b>
	<?php echo CHtml::encode($data->completed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usesleft')); ?>:</b>
	<?php echo CHtml::encode($data->usesleft); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validfrom')); ?>:</b>
	<?php echo CHtml::encode($data->validfrom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('validuntil')); ?>:</b>
	<?php echo CHtml::encode($data->validuntil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mpid')); ?>:</b>
	<?php echo CHtml::encode($data->mpid); ?>
	<br />

	*/ ?>

</div>