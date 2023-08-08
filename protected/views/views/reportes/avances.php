<?php
/* @var $this ProfesoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reportes',
);

$this->menu=array();
?>
<h2>Avance de respuestas</h2>
<div class="row">

<?php 
if (empty($arrayDatos)) {
?>
<div class="alert alert-danger" role="alert">
  Faltan activar encuestas. Cuando las encuestas para Titular, Auxiliar y Laboratorios se encuentren activas se podr&aacute;n ver los gr&aacute;ficos.
</div>
<?php 
}else{

	foreach ($arrayDatos as $key => $value) { ?>
		<div class="col-md-6" style="border: solid 1px #eee">
		<?php $this->widget('ext.Hzl.google.HzlVisualizationChart', 
				array( 'visualization' => 'ColumnChart',
					'data' => $value,
					'options' => array(
						'title' => $key,
						'legend' => 'top',
						'isStacked' => true,
						'width' => 600,
		                'height' => 450)));
		?>
		</div>
<?php }
} ?>
</div>