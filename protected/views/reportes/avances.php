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

<?php foreach ($arrayDatos as $key => $value) { ?>
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
<?php } ?>
</div>