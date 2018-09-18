<?php
/* @var $this AsignaturaProfesorController */
/* @var $model AsignaturaProfesor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->labelEx($model,'asignatura_id'); ?>
		<?php echo $form->dropDownList($model,'asignatura_id',CHtml::listData(Asignaturas::model()->findall(),"id","descripcion","plan"),array('empty'=>'Todos')); ?>
		<!-- <?php echo $form->textField($model,'asignatura_id'); ?> -->
		<?php echo $form->error($model,'asignatura_id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'profesor_id'); ?>
		<?php echo $form->dropDownList($model,'profesor_id',CHtml::listData(Profesores::model()->findall(),"id","nombre"),array('empty'=>'Todos')); ?>
		<!-- <?php echo $form->textField($model,'profesor_id'); ?> -->
		<?php echo $form->error($model,'profesor_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->