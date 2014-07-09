<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'tarefas-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Campos com <span class="required">*</span> são obrigatórios.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'id_projeto',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'inicio',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'termino',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'descricao',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>200)))); ?>

	<?php //echo $form->textAreaGroup($model,'observacao', array('widgetOptions'=>array('htmlOptions'=>array('rows'=>6, 'cols'=>50, 'class'=>'span8')))); ?>

	<?php $this->widget(
    'booster.widgets.TbCKEditor',
	    array(
	    	'model' => $model,
	    	'attribute' => 'observacao',
	        //'name' => 'some_random_text_field',
	        'editorOptions' => array(
	            // From basic `build-config.js` minus 'undo', 'clipboard' and 'about'
	            'plugins' => 'basicstyles,toolbar,enterkey,entities,floatingspace,wysiwygarea,indentlist,link,list,dialog,dialogui,button,indent,fakeobjects'
	        )
	    )
	);
?>

<div class="form-actions" style="margin-top:20px">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'size' => 'large',
			'label'=>$model->isNewRecord ? 'Enviar' : 'Salvar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
