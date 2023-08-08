<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<?php $this->breadcrumbs=array('Reportes');
$this->menu=array();?>
<?php
$plotValues='';
foreach ($preguntas as $key => $value) { 
	$questionCode = $value['sid'].'X'.$value['gid'].'X'.$value['qid'];
	if( $value['type']=='B' ) {
		$questionCode .='SQ001';
		$questionsTable[ $questionCode ] = array();
		array_push($questionsTable[ $questionCode ], trim(strip_tags($value['question'])));
	}else{
		$textResponses[ $questionCode ] = array();
		array_push($textResponses[ $questionCode ], $value['question']);
	}
}
foreach ($respuestas as $key => $value) { 
	foreach ($questionsTable as $qKey => $qValue) {
		array_push($questionsTable[ $qKey ], $value[$qKey]);
	}
}

foreach ($questionsTable as $key => $value) { 
	$plotValue = '';
	$name = '';
	foreach ($questionsTable[$key] as $k => $v) {
		if( strlen($v) < 3 ){
			$plotValue .= $v.',';
		}
	}
	$plotValues .= '{y:['.substr($plotValue,0,-1).'],type:"box",name:"'.strip_tags($questionsTable[$key][0]).'"},';
} 

foreach ($respuestas as $key => $value) { 
	foreach ($textResponses as $qKey => $qValue) {
		array_push($textResponses[ $qKey ], $value[$qKey]);
	}
}

?>
<h2><?php echo CHtml::link($asignaturaProfesor[0]['docente'], array('/AsignaturaProfesor/admin', 'AsignaturaProfesor[profesor_id]'=>$asignaturaProfesor[0]['id'])) ?> <?php print_r($asignaturaProfesor[0]['cargo'])?> en <?php echo CHtml::link($asignaturaProfesor[0]['asignatura'], array('/AsignaturaProfesor/admin', 'AsignaturaProfesor[asignatura_id]'=>$asignaturaProfesor[0]['asignatura_id'])) ?> de <?php print_r($asignaturaProfesor[0]['carrera'])?> plan <?php print_r($asignaturaProfesor[0]['plan'])?></h2>
<div class="row">
	<h3>Particiación</h3>
	<?php print_r(count(array_values($questionsTable)[0])-1)?> respuestas de <?php print_r($totalEncuestas[0]['total'])?> encuestas.
	<div class="progress">
	  <div class="progress-bar bg-success" role="progressbar" style="width: <?php print_r( round( (count(array_values($questionsTable)[0])-1) / ($totalEncuestas[0]['total']) *100) )?>%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"><?php print_r( round( (count(array_values($questionsTable)[0])-1) / ($totalEncuestas[0]['total']) *100) )?>%</div>
	</div>
</div>
<div class="row">
	<div id="plot-result" style="height:1000px"></div>
</div>
<script>
var data = [<?php print_r($plotValues)?>];

var layout = {
  title: '',
  showlegend: true,
  orientation: "h",
  legend: {"orientation": "h"}
};

Plotly.newPlot('plot-result', data, layout,{showSendToCloud: true});
</script>

<div class="row">
	<table class="table table-striped table-bordered">
		<tbody>
		<?php
			foreach ($questionsTable as $key => $value) { 
		?>
			<tr>
		<?php
			foreach ($questionsTable[$key] as $k => $v) {
		?>
				<td><?php print_r($v)?></td>
		<?php
			}
		?>
			</tr>
		<?php
			} 
		?>
		</tbody>
	</table>
</div>
<div class="row">
	<h2>Preguntas Abiertas</h2>
	<?php
		foreach ($textResponses as $key => $value) { 
	?>
		<ul class="list-group">
	<?php
		foreach ($textResponses[$key] as $k => $v) {
	?>
			<li class="list-group-item<?php 
			if ($k == 0) {
				print_r( " active\">".strip_tags($v));
			}else{
				print_r( "\">".strip_tags($v));
			}
			?></li>
	<?php
		}
	?>
		</ul>
	<?php
		} 
	?>
</div>
