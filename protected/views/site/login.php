<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?php
            /* @var $this SiteController */
            /* @var $model LoginForm */
            /* @var $form CActiveForm  */

            $this->pageTitle=Yii::app()->name . ' - Login';
            ?>

            <h1>Encuesta de Evaluación Docente | UTN - FRD</h1>
            <hr>
            <p>Las encuestas de evaluación del desempeño de docentes y auxiliares ya se encuentran disponibles.</p>
            <p>Recordá que son anónimas y obligatorias, y deben completarse antes del 22 de noviembre para evitar inconvenientes en tu inscripción a exámenes finales.</p>
            <p>Este espacio es institucional y confidencial, orientado a promover la mejora continua de la enseñanza en nuestra Facultad. Tu opinión es fundamental: expresala con respeto y responsabilidad.</p>
            <hr>
            <p style="font-size:120%;font-weight:bold">Si aún no tienes contraseña o no la recuerdas <?php echo CHtml::link('accede a recuperar contraseña.', array('site/recoverPassword')); ?> </p>

            <!-- Mostrar mensajes flash -->
            <?php if(Yii::app()->user->hasFlash('success')): ?>
            <div class="alert alert-success">
                <?php echo Yii::app()->user->getFlash('success'); ?>
            </div>
            <?php endif; ?>

            <?php if(Yii::app()->user->hasFlash('error')): ?>
            <div class="alert alert-danger">
                <?php echo Yii::app()->user->getFlash('error'); ?>
            </div>
            <?php endif; ?>

            <div class="form" autocomplete="off">
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'login-form',
                'enableClientValidation'=>false,
                'clientOptions'=>array(
                    'validateOnSubmit'=>false,
                ),
            )); ?>

                <div class="form-group" style="width:100%">
                    <?php echo $form->labelEx($model,'username'); ?>
                    <?php echo $form->textField($model,'username', array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'username'); ?>
                    <p class="hint">Utilice su DNI como usuario sin puntos ni espacios.</p>
                </div>

                <div class="form-group" style="width:100%">
                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->passwordField($model,'password', array('class'=>'form-control')); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>

                <div class="row buttons text-right" style="width:100%">
                    <?php echo CHtml::link('¿Olvidó su contraseña?', array('site/recoverPassword'), array('class'=>'btn btn-secondary')); ?>
                    <?php echo CHtml::submitButton('Entrar', array('class'=>'btn btn-primary btn-large')); ?>
                </div>

            <?php $this->endWidget(); ?>
            </div><!-- form -->

            <script>
            $(document).ready(function(){
                $("#login-form").attr("autocomplete","off");   
            });
            </script>
        </div>
    </div>
</div>

</body>
</html>
