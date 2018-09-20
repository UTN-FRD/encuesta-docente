<div class="form-group">
<?php
	echo $form->labelEx($model,'participant_id', array('style'=>'text-align:left')); 
	echo $form->hiddenField($model, 'participant_id' ,array());
	$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
		'name'=>'firstname',
		'model'=>$model,
		'sourceUrl'=>$this->createUrl('listarParticipants'),
		'htmlOptions' => array(
            'placeholder' => "Search...",
            'class'=>'form-control',
        ),

		'options'=>array(
			'minLength'=>'2',
			'showAnim'=>'fold',
			'select' => 'js:function(event, ui)
				{ jQuery("#Incripciones_participant_id").val(ui.item["id"]); }',
			'search'=> 'js:function(event, ui)
				{ jQuery("#Incripciones_participant_id").val(0); }'
		),
	)); ?>
</div>
