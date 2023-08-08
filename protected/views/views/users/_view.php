<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->uid), array('view', 'id'=>$data->uid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('users_name')); ?>:</b>
	<?php echo CHtml::encode($data->users_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('full_name')); ?>:</b>
	<?php echo CHtml::encode($data->full_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_id')); ?>:</b>
	<?php echo CHtml::encode($data->parent_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lang')); ?>:</b>
	<?php echo CHtml::encode($data->lang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('htmleditormode')); ?>:</b>
	<?php echo CHtml::encode($data->htmleditormode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('templateeditormode')); ?>:</b>
	<?php echo CHtml::encode($data->templateeditormode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questionselectormode')); ?>:</b>
	<?php echo CHtml::encode($data->questionselectormode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('one_time_pw')); ?>:</b>
	<?php echo CHtml::encode($data->one_time_pw); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateformat')); ?>:</b>
	<?php echo CHtml::encode($data->dateformat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified')); ?>:</b>
	<?php echo CHtml::encode($data->modified); ?>
	<br />

	*/ ?>

</div>