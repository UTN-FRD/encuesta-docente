<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Administracion';
$this->breadcrumbs=array(
	'Administracion',
);

?>
<h1>Administraci&oacute;n</h1>

<div class="btn-group" role="group">

	<?php echo CHtml::link('Asignaturas', '../asignaturas', array('class' => 'btn btn-default'));?>
	<?php echo CHtml::link('Carreras', '../carreras', array('class' => 'btn btn-default'));?>
	<?php echo CHtml::link('Asignaturas-Profesor', '../asignaturaprofesor', array('class' => 'btn btn-default'));?>
	<?php echo CHtml::link('Inscripciones', '../incripciones', array('class' => 'btn btn-default'));?>
	<?php echo CHtml::link('Alumnos', '../participants', array('class' => 'btn btn-default'));?>
	<?php echo CHtml::link('Profesores', '../profesores', array('class' => 'btn btn-default'));?>
</div>

