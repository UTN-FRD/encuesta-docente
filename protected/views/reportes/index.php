<?php
/* @var $this ProfesoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reportes',
);

$this->menu=array();?>
<h2>Información General</h2>
<div class="row">
	<div class="col-md-6" style="border: solid 1px #eee">

		<?php
			$this->widget('ext.Hzl.google.HzlVisualizationChart', 
				array(
					'visualization' => 'PieChart',
					'data' => $alumnosPorCarrera,
					'options' => array(
						'title' => 'Alumnos por carrera',
						'legend' => 'left',
						'width' => 600,
		                'height' => 450)));
		?>
		<div class="card">
			<div class="card-body" style="text-align: center;">
				Cantidad de alumnos que se inscribieron en al menos una materia en el año lectivo. <br>&nbsp;
			</div>
		</div>
	</div>
	<div class="col-md-6" style="border: solid 1px #eee">
		<?php
			$grafico = $this->widget('ext.Hzl.google.HzlVisualizationChart', 
				array(
					'visualization' => 'PieChart',
					'data' => $inscripcionesPorCarrera,
					'options' => array(
						'title' => 'Encuestas por carrera',
						'width' => 600,
		                'height' => 450)));
		?>
		<div class="card">
			<div class="card-body" style="text-align: center;">
				Cantidad de inscripciones en el año lectivo. Si un alumno se inscribió a 4 materias y otro a 8 se cuenta 4+8=12. Este cálculo se realiza para todas las inscripciones de todas las materias de cada carrera. 
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6" style="border: solid 1px #eee">
		<?php
			$grafico = $this->widget('ext.Hzl.google.HzlVisualizationChart', 
				array(
					'visualization' => 'ComboChart',
					'data' => $alumnosPorCarreraNivel,
					'options' => array(
						'title' => 'Alumnos por nivel carrera',
						'width' => 600,
		                'height' => 450,
				        'seriesType' => 'bars',
		          )));
		?>
	</div>
	<div class="col-md-6" style="border: solid 1px #eee">
		<?php
			$grafico = $this->widget('ext.Hzl.google.HzlVisualizationChart', 
				array(
					'visualization' => 'ComboChart',
					'data' => $inscripcionesPorCarreraNivel,
					'options' => array(
						'title' => 'Encuestas por nivel carrera',
						'width' => 600,
		                'height' => 450,
				        'seriesType' => 'bars',
		          )));
		?>
	</div>
</div>