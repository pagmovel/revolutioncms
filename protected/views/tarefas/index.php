<?php
$this->breadcrumbs=array(
	'Tarefas',
);

$this->menu=array(
array('label'=>'Cadastrar Tarefas','url'=>array('create')),
array('label'=>'Gerenciar Tarefas','url'=>array('admin')),
);
?>

<h1>Tarefas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
