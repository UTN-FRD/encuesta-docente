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

	<link rel="shortcut icon" href="../../themes/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="../../themes/images/favicon.ico" type="image/x-icon">

	<!-- Bootstrap requiere jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<div id="header">
		<img src="<?php echo Yii::app()->baseUrl; ?>/themes/images/survey_list_header.png">

		<div>
			<?php echo CHtml::encode(Yii::app()->name) ?>
		</div>
	</div><!-- header -->
	
	<!-- Menú de navegación -->
	<div>
		<?php
			if(Yii::app()->user->isAdmin() and !Yii::app()->user->isDirector()) {
				$this->widget('application.extensions.eflatmenu.EFlatMenu', array(
					'items' => array(
						array('label' => 'Asignaturas-Profesor', 'url' => array('/AsignaturaProfesor/admin', 'view' => 'about')),
						array('label' => 'Inscripciones', 'url' => array('/Incripciones/admin', 'view' => 'about', 'Incripciones[anio_academico]'=> date('Y'))),
						array('label' => 'Administrar', 'url' => array(''),
						'items' => array(
							array('label'=>'Asignaturas', 'url'=>array('/asignaturas/admin', 'view'=>'about')),
							array('label'=>'Alumnos', 'url'=>array('/participants/admin', 'view'=>'about')),
							array('label'=>'Profesores', 'url'=>array('/profesores/admin', 'view'=>'about')),
							array('label'=>'Carreras', 'url'=>array('/carreras/admin', 'view'=>'about')),
							array('label'=>'Departamentos','url'=>array('/departamentos/admin','view'=>'about')),
							array('label'=>'Usuarios', 'url'=>array('/users/admin', 'view'=>'about')),
						)),
						array('label' => 'Reportes', 'url' => array(''),
						'items' => array(
							array('label'=>'Generales', 'url'=>array('/reportes/diagramacaja', 'pnivel'=>'', 'pcargo'=>'Titular', 'pcarrera'=>'', 'pdepartamento'=>'', )),
							array('label'=>'Encuestas', 'url'=>array('/reportes/generalesPorEncuestas', 'view'=>'about')),
							array('label'=>'Alumnos', 'url'=>array('/reportes/generalesPorAlumnos', 'view'=>'about')),
							array('label' => 'Carreras', 'url' => array('/reportes/respuestasAgrupadas','pcarrera'=>'7','pcargo'=>'Titular')),
						)),
						array('label'=>'Iniciar Sesion', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					)
				));
		?>

			<style type="text/css">
				.span-4 { display: block; }
			</style>

		<?php }
		   if(Yii::app()->user->isDirector()){
		   	$this->widget('application.extensions.eflatmenu.EFlatMenu', array(
					'items' => array(
						array('label'=>'Iniciar Sesion', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					)
				));
		   }
		 ?>

		<?php 
			$user = Yii::app()->user->id;
			if(!Yii::app()->user->isAdmin()) {
				$this->widget('application.extensions.eflatmenu.EFlatMenu',array(
					'items'=>array(
						array('label'=>'Encuestas', 'url'=>array('/incripciones/encuestas'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Cambiar contraseña', 'url'=>array('/users/changePassword/'.$user), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
					),
				));
		?>

			<style type="text/css">
				.span-4 { display: none; }
				.span-24 { width: 100%; }
			</style>

		<?php } ?>
	</div><!-- mainmenu -->

	<div class="site-wrap">
		<?php if(isset($this->breadcrumbs) && !Yii::app()->user->isDirector()):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>

		<?php echo $content; ?>

		<div class="clear"></div>

		<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by <a href="http://lsi.frd.utn.edu.ar">LSI</a>.<br/>
		</div><!-- footer -->
	</div><!-- site-wrap -->

</body>
</html>