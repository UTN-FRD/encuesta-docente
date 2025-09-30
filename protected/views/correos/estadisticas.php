<?php
/* @var $this CorreosController */
/* @var $total integer */
/* @var $enviados integer */
/* @var $errores integer */
/* @var $pendientes integer */
/* @var $tipoStats array */

$this->breadcrumbs=array(
	'Correos'=>array('index'),
	'Estadísticas',
);

$this->menu=array(
	array('label'=>'Listar Correos', 'url'=>array('index')),
	array('label'=>'Administrar Correos', 'url'=>array('admin')),
);

?>

<h1>Estadísticas de Correos Electrónicos</h1>

<div class="row">
	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Total Correos</h3>
			</div>
			<div class="panel-body text-center">
				<h2><?php echo $total; ?></h2>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Enviados</h3>
			</div>
			<div class="panel-body text-center">
				<h2><?php echo $enviados; ?></h2>
				<small><?php echo $total > 0 ? round(($enviados / $total) * 100, 1) : 0; ?>%</small>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Errores</h3>
			</div>
			<div class="panel-body text-center">
				<h2><?php echo $errores; ?></h2>
				<small><?php echo $total > 0 ? round(($errores / $total) * 100, 1) : 0; ?>%</small>
			</div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="panel panel-warning">
			<div class="panel-heading">
				<h3 class="panel-title">Pendientes</h3>
			</div>
			<div class="panel-body text-center">
				<h2><?php echo $pendientes; ?></h2>
				<small><?php echo $total > 0 ? round(($pendientes / $total) * 100, 1) : 0; ?>%</small>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Correos por Tipo</h3>
			</div>
			<div class="panel-body">
				<?php if (!empty($tipoStats)): ?>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Tipo de Correo</th>
								<th>Cantidad</th>
								<th>Porcentaje</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$tipos = Correos::getTiposCorreo();
							foreach ($tipoStats as $stat): 
							?>
								<tr>
									<td><?php echo isset($tipos[$stat['tipo_correo']]) ? $tipos[$stat['tipo_correo']] : $stat['tipo_correo']; ?></td>
									<td><?php echo $stat['cantidad']; ?></td>
									<td><?php echo $total > 0 ? round(($stat['cantidad'] / $total) * 100, 1) : 0; ?>%</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php else: ?>
					<p class="text-muted">No hay datos disponibles</p>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Resumen de Estados</h3>
			</div>
			<div class="panel-body">
				<div class="progress" style="height: 30px;">
					<?php if ($total > 0): ?>
						<?php $enviadosPorcentaje = ($enviados / $total) * 100; ?>
						<?php $erroresPorcentaje = ($errores / $total) * 100; ?>
						<?php $pendientesPorcentaje = ($pendientes / $total) * 100; ?>
						
						<div class="progress-bar progress-bar-success" style="width: <?php echo $enviadosPorcentaje; ?>%">
							<?php if ($enviadosPorcentaje > 10): ?>Enviados <?php echo round($enviadosPorcentaje, 1); ?>%<?php endif; ?>
						</div>
						<div class="progress-bar progress-bar-danger" style="width: <?php echo $erroresPorcentaje; ?>%">
							<?php if ($erroresPorcentaje > 10): ?>Errores <?php echo round($erroresPorcentaje, 1); ?>%<?php endif; ?>
						</div>
						<div class="progress-bar progress-bar-warning" style="width: <?php echo $pendientesPorcentaje; ?>%">
							<?php if ($pendientesPorcentaje > 10): ?>Pendientes <?php echo round($pendientesPorcentaje, 1); ?>%<?php endif; ?>
						</div>
					<?php else: ?>
						<div class="progress-bar" style="width: 100%">Sin datos</div>
					<?php endif; ?>
				</div>
				
				<ul class="list-unstyled">
					<li><span class="label label-success">■</span> Enviados: <?php echo $enviados; ?> (<?php echo $total > 0 ? round(($enviados / $total) * 100, 1) : 0; ?>%)</li>
					<li><span class="label label-danger">■</span> Errores: <?php echo $errores; ?> (<?php echo $total > 0 ? round(($errores / $total) * 100, 1) : 0; ?>%)</li>
					<li><span class="label label-warning">■</span> Pendientes: <?php echo $pendientes; ?> (<?php echo $total > 0 ? round(($pendientes / $total) * 100, 1) : 0; ?>%)</li>
				</ul>
			</div>
		</div>
	</div>
</div>