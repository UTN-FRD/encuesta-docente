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

	<?php $this->renderPartial('../widgets/asignaturaSelector',array(
		'model'=>$model,
		'form'=>$form
	)); ?>

	<div class="form-group">
		<?php echo $form->label($model,'anio_academico', array('style'=>'text-align:left;width:auto')); ?>
		<?php echo $form->textField($model,'anio_academico', array('class'=>'form-control')); ?>
	</div>

	<div class="row">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->