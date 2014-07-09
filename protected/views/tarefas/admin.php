<?php
$this->breadcrumbs=array(
	'Tarefas'=>array('index'),
	'Gerenciar',
);

$this->menu=array(
array('label'=>'Listar Tarefas','url'=>array('index')),
array('label'=>'Cadastrar Tarefas','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('tarefas-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Gerenciar Tarefas</h1>

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
'id'=>'tarefas-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
				'observacao',
		'id',
		'id_projeto',
		'inicio',
		'termino',
		'descricao',
		array(
			'class'=>'booster.widgets.TbButtonColumn',
		),
	),
)); ?>
