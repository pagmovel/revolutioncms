<?php
$this->breadcrumbs=array(
	'Tarefas'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Listar Tarefas','url'=>array('index')),
array('label'=>'Cadastrar Tarefas','url'=>array('create')),
array('label'=>'Alterar Tarefas','url'=>array('update','id'=>$model->id)),
array('label'=>'Apagar Tarefas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Gerenciar Tarefas','url'=>array('admin')),
);
?>

<h1>Visualizar Tarefas #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
				'observacao',
		'id',
		'id_projeto',
		'inicio',
		'termino',
		'descricao',
	),
)); ?>
