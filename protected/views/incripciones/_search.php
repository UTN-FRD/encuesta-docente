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

	<div>
	<?php
		echo $form->labelEx($model,'participant_id'); 
		echo $form->hiddenField($model, 'participant_id' ,array());
		$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
			'name'=>'firstname',
			'model'=>$model,
			'sourceUrl'=>$this->createUrl('listarParticipants'),
			'options'=>array(
			'minLength'=>'2',
			'showAnim'=>'fold',
			'select' => 'js:function(event, ui)
			{ jQuery("#Incripciones_participant_id").val(ui.item["id"]); }',
			'search'=> 'js:function(event, ui)
			{ jQuery("#Incripciones_participant_id").val(0); }'
		),
		)); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->