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

	<?php $this->renderPartial('../widgets/alumnosSuggester',array(
		'model'=>$model,
		'form'=>$form
	)); ?>

	<div>
		<?php echo $form->labelEx($model,'asignatura_id'); ?>
		<?php echo $form->dropDownList($model,'asignatura_id',CHtml::listData(Asignaturas::model()->findall(),"id","descripcion","plan"),array('empty'=>'Todos')); ?>
		<?php echo $form->error($model,'asignatura_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anio_academico'); ?>
		<?php echo $form->textField($model,'anio_academico'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->