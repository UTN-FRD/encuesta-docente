<?php
/* @var $this IncripcionesController */
/* @var $model Incripciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'participant_id'); ?>
		<?php echo $form->dropDownList($model,'participant_id',CHtml::listData(Participants::model()->findall(),"participant_id","firstname"),array('empty'=>'Todos')); ?>
		<?php echo $form->error($model,'participant_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'asignatura_id'); ?>
		<?php echo $form->dropDownList($model,'asignatura_id',CHtml::listData(Asignaturas::model()->findall(),"id","descripcion","plan"),array('empty'=>'Todos')); ?>
		<?php echo $form->error($model,'asignatura_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_academico'); ?>
		<?php echo $form->textField($model,'anio_academico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comentarios'); ?>
		<?php echo $form->textField($model,'comentarios',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->