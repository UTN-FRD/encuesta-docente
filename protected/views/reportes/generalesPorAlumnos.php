<?php
/* @var $this ProfesoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reportes',
);

$this->menu=array();?>

<h2>Resultados Generales</h2>

<div class="row">
	<div class="col-md-12" style="border: solid 1px #eee">
		<h2>Basado en la Cantidad de alumnos: 1537 encuestas</h2>
	</div>
	<div class="col-md-6" style="border: solid 1px #eee">
		<h3>Participaci&oacute;n por Carrera</h3>
		<div id="participacionPorCarrera"></div>
	</div>
	<div class="col-md-6" style="border: solid 1px #eee">
		
	</div>
	<div class="col-md-12" style="border: solid 1px #eee; ">
		<?php echo substr(print_r(json_encode($participacionPorCarrera)),0,-1) ?>
	</div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current', {'packages':['table', 'corechart']});
google.charts.setOnLoadCallback(drawTable);

function drawTable() {
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Carrera');
	data.addColumn('string', 'Inscriptos');
	data.addColumn('string', 'Participantes');
	data.addRows( <?php echo substr(print_r(json_encode($participacionPorCarrera)),0,-1) ?> );

	var table = new google.visualization.Table(document.getElementById('participacionPorCarrera'));
	table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
}
</script>