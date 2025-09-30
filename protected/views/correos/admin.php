<?php
/* @var $this CorreosController */
/* @var $model Correos */

$this->breadcrumbs=array(
	'Correos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Correos', 'url'=>array('index')),
	array('label'=>'Estadísticas', 'url'=>array('estadisticas')),
);

?>

<h1>Administrar Correos Enviados</h1>

<p>
Esta página le permite administrar todos los correos electrónicos enviados por el sistema.
</p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'correos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
			'name'=>'usuario_dni',
			'header'=>'DNI Usuario',
		),
		array(
			'name'=>'destinatario_email',
			'header'=>'Email Destinatario',
		),
		array(
			'name'=>'destinatario_nombre',
			'header'=>'Nombre Destinatario',
		),
		array(
			'name'=>'asunto',
			'header'=>'Asunto',
			'value'=>'strlen($data->asunto) > 50 ? substr($data->asunto, 0, 50) . "..." : $data->asunto',
		),
		array(
			'name'=>'tipo_correo',
			'header'=>'Tipo',
			'filter'=>Correos::getTiposCorreo(),
		),
		array(
			'name'=>'estado_envio',
			'header'=>'Estado',
			'filter'=>Correos::getEstadosEnvio(),
			'value'=>function($data) {
				$estados = Correos::getEstadosEnvio();
				$class = '';
				switch($data->estado_envio) {
					case Correos::ESTADO_ENVIADO:
						$class = 'label-success';
						break;
					case Correos::ESTADO_ERROR:
						$class = 'label-danger';
						break;
					case Correos::ESTADO_PENDIENTE:
						$class = 'label-warning';
						break;
				}
				return '<span class="label ' . $class . '">' . $estados[$data->estado_envio] . '</span>';
			},
			'type'=>'raw',
		),
		array(
			'name'=>'fecha_creacion',
			'header'=>'Fecha Creación',
			'value'=>'date("d/m/Y H:i", strtotime($data->fecha_creacion))',
		),
		array(
			'name'=>'fecha_envio',
			'header'=>'Fecha Envío',
			'value'=>'$data->fecha_envio ? date("d/m/Y H:i", strtotime($data->fecha_envio)) : "-"',
		),
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{reenviar}',
			'buttons'=>array(
				'reenviar'=>array(
					'url'=>'Yii::app()->createUrl("correos/reenviar", array("id"=>$data->id))',
					'imageUrl'=>false,
					'options'=>array('class'=>'btn btn-xs btn-warning', 'title'=>'Reenviar correo'),
					'visible'=>'$data->estado_envio === Correos::ESTADO_ERROR || $data->estado_envio === Correos::ESTADO_PENDIENTE',
					'label'=>'<i class="glyphicon glyphicon-repeat"></i> Reenviar',
				),
			),
		),
	),
)); ?>