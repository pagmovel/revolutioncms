<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Listar Clientes','url'=>array('index')),
array('label'=>'Cadastrar Clientes','url'=>array('create')),
array('label'=>'Alterar Clientes','url'=>array('update','id'=>$model->id)),
array('label'=>'Apagar Clientes','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Gerenciar Clientes','url'=>array('admin')),
);
?>

<h1>Visualizar Clientes #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
				'id',
		'nome',
		'contato',
		'telefones',
		'email',
	),
)); ?>
