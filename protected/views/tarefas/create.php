<?php
$this->breadcrumbs=array(
	'Tarefas'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
array('label'=>'Listar Tarefas','url'=>array('index')),
array('label'=>'Gerenciar Tarefas','url'=>array('admin')),
);
?>

<h1>Cadastrar Tarefas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>