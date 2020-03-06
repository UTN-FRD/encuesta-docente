<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<?php $this->breadcrumbs=array('Reportes');
$this->menu=array();?>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Filtros</h3>
  </div>
  <div class="panel-body">
  	<form action="diagramacaja" method="GET" class="form-inline">
  		<div class="form-group col-md-2">
	  		<label>Nivel</label>
			<select class="form-control" name="pnivel" id="pnivel" style="width:100%">
				<option value="">Todos</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
		<div class="form-group col-md-3">
	  		<label>Cargo</label>
	  		<select class="form-control" name="pcargo" id="pcargo" style="width:100%">
			  <option>Titular</option>
			  <option>Auxiliar</option>
			  <option>Laboratorio</option>
			</select>
		</div>
		<div class="form-group col-md-3">
	  		<label>Carrera</label>
	  		<select class="form-control" name="pcarrera" id="pcarrera" style="width:100%">
	  			<option value="">Todos</option>
	  			<option value="7">Eléctrica</option>
	  			<option value="17">Mecánica</option>
	  			<option value="27">Química</option>
	  			<option value="5">Sistemas</option>
			</select>
		</div>
		<div class="form-group col-md-3">
	  		<label>Departamento</label>
	  		<select class="form-control" name="pdepartamento" id="pdepartamento" style="width:100%">
	  			<option value="">Todos</option>
	  			<option value="17">Básicas</option>
	  			<option value="15">Eléctrica</option>
	  			<option value="16">Mecánica</option>
	  			<option value="4">Química</option>
	  			<option value="12">Sistemas</option>
			</select>
		</div>
		<div class="form-group col-md-1">
			<label>&nbsp;</label>
		      <button type="submit" class="btn btn-default">Aplicar</button>
		</div>
  	</form>
  </div>
</div>
<script type="text/javascript">
function selectElement(id, valueToSelect) {    
    let element = document.getElementById(id);
    element.value = valueToSelect;
}

selectElement('pnivel', '<?php echo $_GET['pnivel']; ?>');
selectElement('pcargo', '<?php echo $_GET['pcargo']; ?>');
selectElement('pcarrera', '<?php echo $_GET['pcarrera']; ?>');
selectElement('pdepartamento', '<?php echo $_GET['pdepartamento']; ?>');

</script>

<?php
$plotValues='';
$tickvals='[';
$ticktext='[';
$i = 0;
foreach ($preguntas as $key => $value) { 
	$questionCode = $value['sid'].'X'.$value['gid'].'X'.$value['qid'];
	if( $value['type']=='B' ) {
		$questionCode .='SQ001';
		$questionsTable[ $questionCode ] = array();
		array_push($questionsTable[ $questionCode ], chr(65+$i).' - '.trim(strip_tags($value['question'])));
		$tickvals=$tickvals.$i.',';
		$ticktext=$ticktext.'"'.chr(65+$i++).'",';
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
	$plotValues .= '{y:['.substr($plotValue,0,-1).'],type:"box",name:"'.strip_tags($questionsTable[$key][0]).'",marker:{size:10}, shapes: [{line: {width: 30}}]},';
} 

foreach ($respuestas as $key => $value) { 
	foreach ($textResponses as $qKey => $qValue) {
		array_push($textResponses[ $qKey ], $value[$qKey]);
	}
}

?>
<div class="row">
	<h2><?php echo $titulo ?></h2>
	<h3>Particiación</h3>
	<?php print_r(count(array_values($questionsTable)[0])-1)?> respuestas de <?php print_r($totalEncuestas[0]['total'])?> encuestas.
	<div class="progress">
	  <div class="progress-bar bg-success" role="progressbar" style="width: <?php print_r( round( (count(array_values($questionsTable)[0])-1) / ($totalEncuestas[0]['total']) *100) )?>%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"><?php print_r( round( (count(array_values($questionsTable)[0])-1) / ($totalEncuestas[0]['total']) *100) )?>%</div>
	</div>
</div>
<div class="row">
	<h3>Gráfico de Respuestas</h3>
	<div id="plot-result" style="height:650px"></div>
</div>
<script>
var data = [<?php print_r($plotValues)?>];

var layout = {
  title: '',
  showlegend: true,
  legend: {
	xanchor:"center",//"auto" | "left" | "center" | "right"
	yanchor:"top",//"auto" | "top" | "middle" | "bottom"
	y:3,//number between or equal to -2 and 3
	x:0.5,//number between or equal to -2 and 3
	orientation: "h"
  },	
  xaxis: {
  	showticklabels: true,
  	tickmode: 'array',
  	tickvals: <?php echo substr($tickvals,0,-1)?>],
  	ticktext: <?php echo substr($ticktext,0,-1)?>]
  },
  yaxis: {
    gridcolor: 'rgb(200, 200, 200)',
    gridwidth: 2
  }
};

Plotly.newPlot('plot-result', data, layout);
</script>

<style>
.plot .boxlayer .boxes .box{stroke-width: 3px !important;}
</style>