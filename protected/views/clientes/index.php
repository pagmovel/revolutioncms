<?php
$this->breadcrumbs=array(
	'Clientes',
);

$this->menu=array(
array('label'=>'Cadastrar Clientes','url'=>array('create')),
array('label'=>'Gerenciar Clientes','url'=>array('admin')),
);
?>

<h1>Clientes</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
