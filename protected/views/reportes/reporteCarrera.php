<?php
/* @var $this ProfesoresController */
/* @var $dataProvider CActiveDataProvider */
$this->breadcrumbs=array(
	'Reportes','Carrera'
);

$this->menu=array();?>
<ul class="nav nav-tabs">
  <li <?php echo ($carrera[0]['id']==7)?'class="active"':'' ?>><?php echo CHtml::link('Ingenier&iacute;a El&eacute;ctrica', array('respuestasAgrupadas','pcarrera'=>'7','pcargo'=>'Titular')) ?></li>
  <li <?php echo ($carrera[0]['id']==17)?'class="active"':'' ?>><?php echo CHtml::link('Ingenier&iacute;a Mec&aacute;nica', array('respuestasAgrupadas','pcarrera'=>'17','pcargo'=>'Titular')) ?></li>
  <li <?php echo ($carrera[0]['id']==27)?'class="active"':'' ?>><?php echo CHtml::link('Ingenier&iacute;a Qu&iacute;mica', array('respuestasAgrupadas','pcarrera'=>'27','pcargo'=>'Titular')) ?></li>
    <li <?php echo ($carrera[0]['id']==5)?'class="active"':'' ?>><?php echo CHtml::link('Ingenier&iacute;a en Sistemas', array('respuestasAgrupadas','pcarrera'=>'5','pcargo'=>'Titular')) ?></li>
</ul>
<div class="row">
	<div class="col-md-6">
		<h2><?php print_r($carrera[0]['description']) ?></h2>
	</div>
	<div class="col-md-6">
		<div class="btn-group pull-right" role="group" style="margin-top: 20px">		
		  <?php echo ($cargo=='Titular') ? CHtml::button('Titular', array('class'=>'btn btn-default active disabled')) : CHtml::link('Titular',array('respuestasAgrupadas','pcarrera'=>$carrera[0]['id'],'pcargo'=>'Titular'), array('class'=>'btn btn-default')); ?>
		  <?php echo ($cargo=='Auxiliar') ? CHtml::button('Auxiliar', array('class'=>'btn btn-default active disabled')) : CHtml::link('Auxiliar',array('respuestasAgrupadas','pcarrera'=>$carrera[0]['id'],'pcargo'=>'Auxiliar'), array('class'=>'btn btn-default')); ?>
		  <?php echo ($cargo=='Laboratorio') ? CHtml::button('Laboratorio', array('class'=>'btn btn-default active disabled')) : CHtml::link('Laboratorio',array('respuestasAgrupadas','pcarrera'=>$carrera[0]['id'],'pcargo'=>'Laboratorio'), array('class'=>'btn btn-default')); ?>		  
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
	<table class="table table-bordered" style="margin-bottom:0">
		<thead>
			<th>NIVEL</th>
			<th>MATERIA</th>
			<th>PROFESOR</th>
			<th>RESPUESTAS</th>
			<th>INSCRIPTOS</th>
			<th>PARTICIPACION</th>
		</thead>
		<tbody>
	<?php 
	$controlNivel = $datos[0]['NIVEL'];
	$totalRespuestas = 0;
	$totalInscriptos = 0;
	$finalRespuestas = 0;
	$finalInscriptos = 0;
	$totales = array();
	foreach ($datos as $key => $value) { 
		if ( !($controlNivel==$value['NIVEL']) ) {
			 
?>
			<tr>
				<td colspan="3" class="text-right">SUBTOTAL</td>
				<td class="text-right"><?php echo $totalRespuestas; ?></td>
				<td class="text-right"><?php echo $totalInscriptos; ?></td>
				<td class="text-right"><?php echo intdiv((100*$totalRespuestas),$totalInscriptos) ?>%</td>
			</tr>
			<tr>
				<th colspan="7" style="background-color: #c3d9ff" ></th>
			</tr>

	<?php
		$totales[$controlNivel] = array('totalRespuestas'=>$totalRespuestas,'totalInscriptos'=>$totalInscriptos);
		$finalInscriptos += $totalInscriptos;
		$finalRespuestas += $totalRespuestas;
		$totalRespuestas = 0;
		$totalInscriptos = 0;
		$controlNivel = $value['NIVEL'];
		}

		?>
			<tr>
				<td><?php echo $value['NIVEL'] ?></td>
				<td width="35%"><?php echo $value['MATERIA'] ?></td>
				<td width="35%"><?php echo $value['PROFESOR'] ?></td>
				<td class="text-right"><?php echo $value['RESPUESTAS'] ?></td>
				<td class="text-right"><?php echo $value['INSCRIPTOS'] ?></td>
				<td class="text-right"><?php echo intdiv((100*$value['RESPUESTAS']),$value['INSCRIPTOS']) ?>%</td>
				<td><a href="respuestas?asignatura_profesor_id=<?php echo $value['asignatura_profesor_id'] ?>"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span></a></td>
			</tr>
	<?php 
		$totalRespuestas += $value['RESPUESTAS'];
		$totalInscriptos += $value['INSCRIPTOS'];
} ?>
			<tr>
				<td colspan="3" class="text-right">SUBTOTAL</td>
				<td class="text-right"><?php echo $totalRespuestas; ?></td>
				<td class="text-right"><?php echo $totalInscriptos; ?></td>
				<td class="text-right"><?php echo intdiv((100*$totalRespuestas),$totalInscriptos) ?>%</td>
			</tr>
	<?php
		$finalInscriptos += $totalInscriptos;
		$finalRespuestas += $totalRespuestas;
		$totales[$controlNivel] = array('totalRespuestas'=>$totalRespuestas,'totalInscriptos'=>$totalInscriptos);
	?>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="6" style="background-color: #c3d9ff" ></th>
			</tr>
			<tr>
				<td colspan="3" class="text-right">TOTAL</td>
				<td class="text-right"><?php echo $finalRespuestas; ?></td>
				<td class="text-right"><?php echo $finalInscriptos; ?></td>
				<td class="text-right"><?php echo intdiv((100*$finalRespuestas),$finalInscriptos) ?>%</td>
			</tr>
		</tfoot>
	</table>
	</div>
</div>
<div class="row">
	<h2><?php print_r($carrera[0]['description']) ?></h2>
	<h3>Participaci&oacute;n de alumnos 2019</h3>
	<?php foreach ($totales as $key => $value) { ?>
	<div class="col-md-12">
		<h2><?php echo $key ?>º AÑO</h2>
	</div>
	<div class="col-md-6">
		<table class="table borderless">
			<tr>
				<td width="25%"></td>
				<td width="25%" class="text-center bordered" style="background-color: #eee">Total de Inscripciones</td>
				<td width="25%" class="text-center bordered" style="background-color: #eee">Total encuestas respondidas</td>
				<td width="25%" class="text-center bordered" style="background-color: #eee">Total de encuestas no respondidas</td>
			</tr>
			<tr>
				<td class="bordered">TOTAL</td>
				<td class="text-center bordered"><?php echo $value['totalInscriptos'] ?></td>
				<td class="text-center bordered"><?php echo $value['totalRespuestas'] ?></td>
				<td class="text-center bordered"><?php echo $value['totalInscriptos']- $value['totalRespuestas'] ?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td class="text-center bordered" style="background-color: #eee">Participaron</td>
				<td class="text-center bordered" style="background-color: #eee">No Participaron</td>
			</tr>
			<tr>
				<td></td>
				<td class=" bordered">TOTAL</td>
				<td class="text-center bordered"><?php echo round((100*$value['totalRespuestas'])/$value['totalInscriptos'],2) ?>%</td>
				<td class="text-center bordered"><?php echo round((100*($value['totalInscriptos']-$value['totalRespuestas'])/$value['totalInscriptos']),2) ?>%</td>
			</tr>
		</table>
	</div>
	<!-- <div class="col-md-6">
		<?php
			$grafico = $this->widget('ext.Hzl.google.HzlVisualizationChart', 
				array(
					'visualization' => 'PieChart',
					'data' => [["Tipo","Porcentaje"],["Participaron", round((100*$value['totalRespuestas'])/$value['totalInscriptos'],2) ],["No Participaron", round((100*($value['totalInscriptos']-$value['totalRespuestas'])/$value['totalInscriptos']),2) ]]));
		?>
	</div> -->
	<?php } ?>
</div>
<style type="text/css">
table.borderless td,table.borderless th{border: none !important}
table td.bordered{border: solid !important}
</style>