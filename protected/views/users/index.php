<h3>Contraseña cambiada correctamente</h3>

 <?php
 $url = Yii::app()->request->baseUrl;
 echo CHtml::htmlButton(
    'Volver a Encuestas',
    array(
        'class'=>"btn btn-primary", 
		"style"=>"width:100%; height:100%; margin: 5px; white-space: normal",
		'onclick'=>"window.location.href = `{$url}/index.php/incripciones/encuestas`",
        )
	);
?>