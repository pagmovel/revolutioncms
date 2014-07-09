<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
array('label'=>'Listar Clientes','url'=>array('index')),
array('label'=>'Cadastrar Clientes','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('clientes-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Gerenciar Clientes</h1>

<!--<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>-->

<!--
<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button btn')); ?>-->
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'clientes-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
				'id',
		'nome',
		'contato',
		'telefones',
		'email',
		array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>
