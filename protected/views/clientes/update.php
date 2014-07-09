<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Gerenciar',
);

	$this->menu=array(
	array('label'=>'Listar Clientes','url'=>array('index')),
	array('label'=>'Cadastrar Clientes','url'=>array('create')),
	array('label'=>'Visualizar Clientes','url'=>array('view','id'=>$model->id)),
	array('label'=>'Gerenciar Clientes','url'=>array('admin')),
	);
	?>

	<h1>Alterar Clientes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>