<?php
$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Listar Projetos','url'=>array('index')),
array('label'=>'Cadastrar Projetos','url'=>array('create')),
array('label'=>'Alterar Projetos','url'=>array('update','id'=>$model->id)),
array('label'=>'Apagar Projetos','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Gerenciar Projetos','url'=>array('admin')),
);
?>

<h1>Visualizar Projetos #<?php echo $model->id; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
				'id',
		'data_cadastro',
		'projeto',
		'data_inicio',
		'data_conclusao',
		'id_cliente',
	),
)); ?>
