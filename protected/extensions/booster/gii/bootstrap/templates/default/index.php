<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label = $this->class2name($this->modelClass);
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>

$this->menu=array(
array('label'=>'Cadastrar <?php echo $this->modelClass; ?>','url'=>array('create')),
array('label'=>'Gerenciar <?php echo $this->modelClass; ?>','url'=>array('admin')),
);
?>

<h1><?php echo $label; ?></h1>

<?php echo "<?php"; ?> $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
