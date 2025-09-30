<?php
/* @var $this CorreosController */
/* @var $data Correos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destinatario_email')); ?>:</b>
	<?php echo CHtml::encode($data->destinatario_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('destinatario_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->destinatario_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('asunto')); ?>:</b>
	<?php echo CHtml::encode(strlen($data->asunto) > 60 ? substr($data->asunto, 0, 60) . '...' : $data->asunto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_correo')); ?>:</b>
	<?php 
		$tipos = Correos::getTiposCorreo();
		echo CHtml::encode(isset($tipos[$data->tipo_correo]) ? $tipos[$data->tipo_correo] : $data->tipo_correo); 
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado_envio')); ?>:</b>
	<?php 
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
	?>
	<span class="label <?php echo $class; ?>">
		<?php echo CHtml::encode($estados[$data->estado_envio]); ?>
	</span>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
	<?php echo CHtml::encode(date('d/m/Y H:i', strtotime($data->fecha_creacion))); ?>
	<br />

	<?php if ($data->fecha_envio): ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_envio')); ?>:</b>
	<?php echo CHtml::encode(date('d/m/Y H:i', strtotime($data->fecha_envio))); ?>
	<br />
	<?php endif; ?>

</div>