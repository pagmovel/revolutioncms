<?php
$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
array('label'=>'Listar Projetos','url'=>array('index')),
array('label'=>'Gerenciar Projetos','url'=>array('admin')),
);
?>

<h1>Cadastrar Projetos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>