<?php
$this->breadcrumbs=array(
	'Projetos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Gerenciar',
);

	$this->menu=array(
	array('label'=>'Listar Projetos','url'=>array('index')),
	array('label'=>'Cadastrar Projetos','url'=>array('create')),
	array('label'=>'Visualizar Projetos','url'=>array('view','id'=>$model->id)),
	array('label'=>'Gerenciar Projetos','url'=>array('admin')),
	);
	?>

	<h1>Alterar Projetos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>