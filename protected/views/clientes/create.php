<?php
$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
array('label'=>'Listar Clientes','url'=>array('index')),
array('label'=>'Gerenciar Clientes','url'=>array('admin')),
);
?>

<h1>Cadastrar Clientes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>