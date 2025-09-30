<?php
/* @var $this CorreosController */
/* @var $model Correos */

$this->breadcrumbs=array(
	'Correos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar Correos', 'url'=>array('index')),
	array('label'=>'Administrar Correos', 'url'=>array('admin')),
	array('label'=>'Estadísticas', 'url'=>array('estadisticas')),
);

if ($model->estado_envio === Correos::ESTADO_ERROR || $model->estado_envio === Correos::ESTADO_PENDIENTE) {
	$this->menu[] = array('label'=>'Reenviar Correo', 'url'=>array('reenviar', 'id'=>$model->id));
}
?>

<h1>Detalle del Correo #<?php echo $model->id; ?></h1>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Información del Correo</h3>
			</div>
			<div class="panel-body">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'id',
						array(
							'name'=>'usuario_dni',
							'label'=>'DNI Usuario',
						),
						array(
							'name'=>'destinatario_email',
							'label'=>'Email Destinatario',
						),
						array(
							'name'=>'destinatario_nombre',
							'label'=>'Nombre Destinatario',
						),
						'asunto',
						array(
							'name'=>'tipo_correo',
							'value'=>isset(Correos::getTiposCorreo()[$model->tipo_correo]) ? Correos::getTiposCorreo()[$model->tipo_correo] : $model->tipo_correo,
						),
						array(
							'name'=>'estado_envio',
							'value'=>function($data) {
								$estados = Correos::getEstadosEnvio();
								$class = '';
								$text = $estados[$data->estado_envio];
								switch($data->estado_envio) {
									case Correos::ESTADO_ENVIADO:
										$class = 'success';
										break;
									case Correos::ESTADO_ERROR:
										$class = 'danger';
										break;
									case Correos::ESTADO_PENDIENTE:
										$class = 'warning';
										break;
								}
								return '<span class="label label-' . $class . '">' . $text . '</span>';
							},
							'type'=>'raw',
						),
						array(
							'name'=>'fecha_creacion',
							'value'=>date('d/m/Y H:i:s', strtotime($model->fecha_creacion)),
						),
						array(
							'name'=>'fecha_envio',
							'value'=>$model->fecha_envio ? date('d/m/Y H:i:s', strtotime($model->fecha_envio)) : 'No enviado',
						),
					),
				)); ?>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Información Técnica</h3>
			</div>
			<div class="panel-body">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						array(
							'name'=>'ip_origen',
							'label'=>'IP Origen',
							'value'=>$model->ip_origen ?: 'No disponible',
						),
						array(
							'name'=>'user_agent',
							'label'=>'User Agent',
							'value'=>$model->user_agent ? substr($model->user_agent, 0, 100) . '...' : 'No disponible',
						),
						array(
							'name'=>'error_mensaje',
							'label'=>'Mensaje de Error',
							'value'=>$model->error_mensaje ?: 'Ninguno',
						),
					),
				)); ?>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Contenido del Mensaje</h3>
			</div>
			<div class="panel-body">
				<pre style="white-space: pre-wrap; background-color: #f8f9fa; padding: 15px; border-radius: 4px;"><?php echo CHtml::encode($model->mensaje); ?></pre>
			</div>
		</div>
	</div>
</div>