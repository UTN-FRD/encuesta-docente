<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<!-- Bootstrap requiere jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo" style="padding:0">
			<img src="<?php echo Yii::app()->baseUrl; ?>/themes/images/survey_list_header.jpg" height="100px"/>
			<span>
			<?php if(!Yii::app()->user->isGuest) {
				echo CHtml::encode(Yii::app()->name); 
			}
			?>
			</span>
		</div>
	</div><!-- header -->
	
	<!-- Menú de navegación -->
	<div id="mainMbMenu">
	<?php
	if(Yii::app()->user->isAdmin()) {
		$this->widget('application.extensions.mbmenu.MbMenu',array(
			'items'=>array(
	//			array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Asignaturas-Profesor', 'url'=>array('/AsignaturaProfesor/admin', 'view'=>'about')),
				array('label'=>'Inscripciones', 'url'=>array('/incripciones/admin', 'view'=>'about')),
				array('label'=>'Administrar', 'url'=>array(''),
				  'items'=>array(
					array('label'=>'Asignaturas', 'url'=>array('/asignaturas/admin', 'view'=>'about')),
					array('label'=>'Alumnos', 'url'=>array('/participants/admin', 'view'=>'about')),
					array('label'=>'Profesores', 'url'=>array('/profesores/admin', 'view'=>'about')),
					array('label'=>'Carreras', 'url'=>array('/carreras/admin', 'view'=>'about')),
				  ),
				),
				array('label'=>'Iniciar Sesion', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));
	 } ?>

	<?php 
	if(!Yii::app()->user->isAdmin()) {
		$this->widget('application.extensions.mbmenu.MbMenu',array(
			'items'=>array(
				array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));
	 } ?>
	</div><!-- mainmenu -->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by <a href="http://lsi.no-ip.org">LSI</a>.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
