<?php
$this->breadcrumbs=array(
	'Projetos',
);

$this->menu=array(
array('label'=>'Cadastrar Projetos','url'=>array('create')),
array('label'=>'Gerenciar Projetos','url'=>array('admin')),
);
?>

<h1>Projetos</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
