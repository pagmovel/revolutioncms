<?php
$this->breadcrumbs=array(
	'Tarefas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Gerenciar',
);

	$this->menu=array(
	array('label'=>'Listar Tarefas','url'=>array('index')),
	array('label'=>'Cadastrar Tarefas','url'=>array('create')),
	array('label'=>'Visualizar Tarefas','url'=>array('view','id'=>$model->id)),
	array('label'=>'Gerenciar Tarefas','url'=>array('admin')),
	);
	?>

	<h1>Alterar Tarefas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>