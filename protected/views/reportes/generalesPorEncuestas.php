<?php
/* @var $this ProfesoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reportes',
);


$this->menu=array();?>

<h2>Resultados Generales 2023</h2>
<h4>C&aacute;lculos basados en la cantidad encuestas</h4>

<div class="row" id="reporte">
	<div class="col-md-12">
		<h2>Total de encuestas respondidas: <?php echo $generales['generales']['totalRespuestas'] ?></h2>
	</div>
	<div class="col-md-6" >
		<table class="table table-bordered">
			<thead>
			<tr>
				<th></th>
				<th scope="col" class="text-center">Profesores</th>
				<th scope="col" class="text-center">Auxiliares</th>
				<th scope="col" class="text-center">TOTAL</th>
			</tr>
			</thead>
				<?php 
				$totalTitular = 0;
				$totalAuxiliar = 0;
				?>
			<tbody>
			<tr>
				<td>Ing. El&eacute;ctrica</td>
				<?php 
				$carreraId='7';
				$totalTitular = $totalTitular + $generales['respuestasPorCarrera'][$carreraId]['Titular'];
				$totalAuxiliar = $totalAuxiliar + $generales['respuestasPorCarrera'][$carreraId]['Auxiliar'];

				?>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Titular'] ?></td>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Auxiliar'] ?></td>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Titular']+$generales['respuestasPorCarrera'][$carreraId]['Auxiliar'] ?></td>
			</tr>
			<tr>
				<td>Ing. Mec&aacute;nica</td>
				<?php 
				$carreraId="17";
				$totalTitular = $totalTitular + $generales['respuestasPorCarrera'][$carreraId]['Titular'];
				$totalAuxiliar = $totalAuxiliar + $generales['respuestasPorCarrera'][$carreraId]['Auxiliar'];

				?>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Titular'] ?></td>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Auxiliar'] ?></td>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Titular']+$generales['respuestasPorCarrera'][$carreraId]['Auxiliar'] ?></td>
			</tr>
			<tr>
				<td>Ing. Qu&iacute;mica</td>
				<?php 
				$carreraId="27";
				$totalTitular = $totalTitular + $generales['respuestasPorCarrera'][$carreraId]['Titular'];
				$totalAuxiliar = $totalAuxiliar + $generales['respuestasPorCarrera'][$carreraId]['Auxiliar'];

				?>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Titular'] ?></td>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Auxiliar'] ?></td>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Titular']+$generales['respuestasPorCarrera'][$carreraId]['Auxiliar'] ?></td>
			</tr>
			<tr>
				<td>Ing. en Sistemas</td>
				<?php 
				$carreraId="5";
				$totalTitular = $totalTitular + $generales['respuestasPorCarrera'][$carreraId]['Titular'];
				$totalAuxiliar = $totalAuxiliar + $generales['respuestasPorCarrera'][$carreraId]['Auxiliar'];

				?>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Titular'] ?></td>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Auxiliar'] ?></td>
				<td class="text-right"><?php echo $generales['respuestasPorCarrera'][$carreraId]['Titular']+$generales['respuestasPorCarrera'][$carreraId]['Auxiliar'] ?></td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<td>TOTAL</td>
				<th scope="row" class="text-right"><?php echo $totalTitular ?></th>
				<th scope="row" class="text-right"><?php echo $totalAuxiliar ?></th>
				<th scope="row" class="text-right"><?php echo $totalTitular + $totalAuxiliar ?></th>
			</tr>
			</tfoot>
		</table>
	</div>
	<div class="col-md-6">
		<table class="table table-bordered">
			<thead>
			<tr>
				<th></th>
				<th class="text-right">Encuestas Respondidas</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Lab. El&eacute;ctrica</td>
				<td class="text-right"><?php echo $generales["Laboratorio"]["Laboratorio_de_Electrica"]?></td>
			</tr>
			<tr>
				<td>Lab. Mec&aacute;nica</td>
				<td class="text-right"><?php echo $generales["Laboratorio"]["Laboratorio_de_Mecánica"]?></td>
			</tr>
			<tr>
				<td>Lab. Qu&iacute;mica</td>
				<td class="text-right"><?php echo $generales["Laboratorio"]["Laboratorio_de_Química"]?></td>
			</tr>
			<tr>
				<td>Lab. en Sistemas</td>
				<td class="text-right"><?php echo $generales["Laboratorio"]["Laboratorio_de_Sistemas_"]?></td>
			</tr>
			<tr>
				<td>Lab. de F&iacute;sica</td>
				<td class="text-right"><?php echo $generales["Laboratorio"]["Laboratorio_de_Física"]?></td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<td>TOTAL</td>
				<th scope="row" class="text-right"><?php echo $generales["Laboratorio"]["Laboratorio_de_Electrica"] + $generales["Laboratorio"]["Laboratorio_de_Mecánica"] + $generales["Laboratorio"]["Laboratorio_de_Química"] + $generales["Laboratorio"]["Laboratorio_de_Sistemas_"] + $generales["Laboratorio"]["Laboratorio_de_Física"]?></th>
			</tr>
			</tfoot>
		</table>
	</div>

	<div class="col-md-6" style="border: solid 1px #eee">
		<div id="cantidadEncuestasGeneral" style="min-height: 400px"></div>
	</div>

	<div class="col-md-6" style="border: solid 1px #eee">
		<h3>Cantidad Encuestas Por Carrera</h3>
		<div id="cantidadEncuestasPorCarrera" style="min-height: 400px"></div>
	</div>

	<div class="col-md-12" style="border: solid 1px #eee">
		<h2>Cantidad Encuestas por Nivel</h2>
	</div>
	<div class="col-md-6" style="border: solid 1px #eee">
		<div id="cantidadEncuestasPorNivelElectrica" style="min-height: 400px"></div>
	</div>
	<div class="col-md-6" style="border: solid 1px #eee">
		<div id="cantidadEncuestasPorNivelMecanica" style="min-height: 400px"></div>
	</div>
	<div class="col-md-6" style="border: solid 1px #eee">
		<div id="cantidadEncuestasPorNivelQuimica" style="min-height: 400px"></div>
	</div>
	<div class="col-md-6" style="border: solid 1px #eee">
		<div id="cantidadEncuestasPorNivelSistemas" style="min-height: 400px"></div>
	</div>

</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table', 'corechart']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {

        //cantidad de encuestas totales
        var data = google.visualization.arrayToDataTable([
          ['Tipo', 'Cantidad'],
          ['Respondidas (<?php echo $generales['generales']['totalRespuestas'] ?>)', <?php echo $generales['generales']['totalRespuestas'] ?>],
          ['No Respondidas (<?php echo ($generales['generales']['totalEncuestas'] - $generales['generales']['totalRespuestas']) ?>)', <?php echo ($generales['generales']['totalEncuestas'] - $generales['generales']['totalRespuestas']) ?>]
        ]);

        var options = {
        	title: 'Cantidad de Encuestas',
        	legend:{position: 'bottom'}
        };

        var chart = new google.visualization.PieChart(document.getElementById('cantidadEncuestasGeneral'));

        chart.draw(data, options);

        //Cantidad encuestas por Carrera
        data = google.visualization.arrayToDataTable([
        ["Carrera", "Respondidas", "No Respondidas" ],
        <?php 
        $respondidas = $generales['respuestasPorCarrera']['7']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera']['7']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["Eléctrica (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera']['17']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera']['17']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["Mecánica (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

		<?php 
        $respondidas = $generales['respuestasPorCarrera']['27']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera']['27']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["Química (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera']['5']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera']['5']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["Sistemas (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,
                       { calc: "stringify",
                         sourceColumn: 2,
                         type: "string",
                         role: "annotation" },]);

      var options = {
        bar: {groupWidth: "95%"},
        isStacked: true,
        legend:{position: 'bottom'}
      };
      chart = new google.visualization.ColumnChart(document.getElementById("cantidadEncuestasPorCarrera"));
      chart.draw(view, options);



//Cantidad encuestas por Carrera
//ELECTRICA
        data = google.visualization.arrayToDataTable([
        ["Carrera", "Respondidas", "No Respondidas" ],
        <?php 
        $respondidas = $generales['respuestasPorCarrera']['7']['1']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera']['7']['1']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["1ro (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera']['7']['2']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera']['7']['2']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["2do (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

		<?php 
        $respondidas = $generales['respuestasPorCarrera']['7']['3']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera']['7']['3']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["3ro (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera']['7']['4']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera']['7']['4']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["4to (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera']['7']['5']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera']['7']['5']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["5to (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera']['7']['0']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera']['7']['0']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["Labs (<?php echo $encuestas > 0 ? round($respondidas / $encuestas * 100) : 0 ?>%)", <?php echo $respondidas ?>, <?php echo $noRespondidas ?>]


      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,
                       { calc: "stringify",
                         sourceColumn: 2,
                         type: "string",
                         role: "annotation" },]);

      var options = {
      	title: "Ingeniería Eléctrica",
        bar: {groupWidth: "95%"},
        isStacked: true,
        legend:{position: 'bottom'}
      };
      chart = new google.visualization.ColumnChart(document.getElementById("cantidadEncuestasPorNivelElectrica"));
      chart.draw(view, options);

      

      //MECANICA
              data = google.visualization.arrayToDataTable([
        ["Carrera", "Respondidas", "No Respondidas" ],
        <?php 
        $carreraId = '17';
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['1']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['1']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["1ro (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['2']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['2']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["2do (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

		<?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['3']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['3']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["3ro (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['4']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['4']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["4to (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['5']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['5']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["5to (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['0']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['0']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["Labs (<?php echo $encuestas > 0 ? round($respondidas / $encuestas * 100) : 0 ?>%)", <?php echo $respondidas ?>, <?php echo $noRespondidas ?>]


      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,
                       { calc: "stringify",
                         sourceColumn: 2,
                         type: "string",
                         role: "annotation" },]);

      var options = {
      	title: "Ingeniería Mecánica",
        bar: {groupWidth: "95%"},
        isStacked: true,
        legend:{position: 'bottom'}
      };
      chart = new google.visualization.ColumnChart(document.getElementById("cantidadEncuestasPorNivelMecanica"));
      chart.draw(view, options);




      //QUIMICA
        data = google.visualization.arrayToDataTable([
        ["Carrera", "Respondidas", "No Respondidas" ],
        <?php 
        $carreraId = '27';
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['1']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['1']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["1ro (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['2']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['2']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["2do (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

		<?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['3']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['3']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["3ro (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['4']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['4']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["4to (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['5']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['5']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["5to (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['0']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['0']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["Labs (<?php echo $encuestas > 0 ? round($respondidas / $encuestas * 100) : 0 ?>%)", <?php echo $respondidas ?>, <?php echo $noRespondidas ?>]


      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,
                       { calc: "stringify",
                         sourceColumn: 2,
                         type: "string",
                         role: "annotation" },]);

      var options = {
      	title: "Ingeniería Química",
        bar: {groupWidth: "95%"},
        isStacked: true,
        legend:{position: 'bottom'}
      };
      chart = new google.visualization.ColumnChart(document.getElementById("cantidadEncuestasPorNivelQuimica"));
      chart.draw(view, options);
      



      //SISTEMAS
        data = google.visualization.arrayToDataTable([
        ["Carrera", "Respondidas", "No Respondidas" ],
        <?php 
        $carreraId = '5';
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['1']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['1']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["1ro (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['2']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['2']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["2do (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

		<?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['3']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['3']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["3ro (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['4']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['4']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["4to (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['5']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['5']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["5to (<?php echo round($respondidas/$encuestas*100) ?>%)",<?php echo $respondidas ?>, <?php echo $noRespondidas ?>],

        <?php 
        $respondidas = $generales['respuestasPorCarrera'][$carreraId]['0']['totalRespuestas'];
        $encuestas = $generales['respuestasPorCarrera'][$carreraId]['0']['totalEncuestas'];
        $noRespondidas = $encuestas - $respondidas;
        ?>
        ["Labs (<?php echo $encuestas > 0 ? round($respondidas / $encuestas * 100) : 0 ?>%)", <?php echo $respondidas ?>, <?php echo $noRespondidas ?>]


      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2,
                       { calc: "stringify",
                         sourceColumn: 2,
                         type: "string",
                         role: "annotation" },]);

      var options = {
      	title: "Ingeniería en Sistemas",
        bar: {groupWidth: "95%"},
        isStacked: true,
        legend:{position: 'bottom'}
      };
      chart = new google.visualization.ColumnChart(document.getElementById("cantidadEncuestasPorNivelSistemas"));
      chart.draw(view, options);

      }
    </script>
  


