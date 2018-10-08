<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Administar',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Usuarios</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'uid',
		'users_name',
		//'password',
		'full_name',
		//'parent_id',
		//'lang',
		/*
		'email',
		'htmleditormode',
		'templateeditormode',
		'questionselectormode',
		'one_time_pw',
		'dateformat',
		'created',
		'modified',
		*/
		array(
			'class'=>'CLinkColumn',
			'label'=>'Cambiar Contraseña',
			'urlExpression'=>'\Yii::app()->createUrl("users/update", array("id" => $data->uid))',
		),
	),
)); ?>

<style type="text/css">

	.span-4 { display: none; }
	.span-24 { width: 100%; }
	
</style>
			
