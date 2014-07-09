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
	'$label'=>array('index'),
	'Gerenciar',
);\n";
?>

$this->menu=array(
array('label'=>'Listar <?php echo $this->modelClass; ?>','url'=>array('index')),
array('label'=>'Cadastrar <?php echo $this->modelClass; ?>','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('<?php echo $this->class2id($this->modelClass); ?>-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<div class="container">
	<h1>Gerenciar <?php echo $this->class2name($this->modelClass); ?></h1>

	<!--<p>
		You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
			&lt;&gt;</b>
		or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
	</p>-->

	<!--
	<?php echo "<?php echo CHtml::link('Busca Avançada','#',array('class'=>'search-button btn')); ?>"; ?>
	-->
	<div class="search-form" style="display:none">
		<?php echo "<?php \$this->renderPartial('_search',array(
		'model'=>\$model,
	)); ?>\n"; ?>
	</div><!-- search-form -->

	<?php 
		$modelo = strtolower($this->class2name($this->modelClass));
		echo "<?php"; ?> $this->widget('booster.widgets.TbGridView',array(
		'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			<?php
				$count = 0;
				foreach ($this->tableSchema->columns as $column) {
					if (++$count == 7) {
						echo "\t\t/*\n"; 
					}
					if ($count == 1) {
						$v_id=$column->name;
						echo "'";
					} else echo "\t\t\t'";
					echo $column->name . "',\n";
				}
				if ($count >= 7) {
					echo "\t\t*/\n";
				}
			?>
			array(  'class'=>'bootstrap.widgets.TbButtonColumn',
				    'header'=>CHtml::link("<i style=\"color: #7AA369;\" class=\"fa fa-plus-square fa-2x\"></i>", 
										array("<?php echo $modelo?>/create",),
										array(
											'rel'=>'tooltip',
											'data-original-title'=>'Adicionar Uma Novo Ítem'
										)
									),
					'template'=>'{atualizar} {deletar}',
					'buttons'=>array(
				        'atualizar' => array(
				            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Alterar Este Ítem')),
			                'label' => '<i class="fa fa-edit"></i>',
			                'imageUrl' => false,
				            'url'=>'Yii::app()->createUrl("<?php echo $modelo; ?>/update", array(
				            	"id" => $data-><?php echo $v_id; ?>,
				            ))',
				        ),

				        'deletar' => array(
				            'options' => array('rel' => 'tooltip', 'data-toggle' => 'tooltip', 'title' => Yii::t('app', 'Remover Este Ítem')),
			                'label' => '<i class="fa fa-trash-o"></i>',
			                'imageUrl' => false,
				            'url'=>'Yii::app()->createUrl("<?php echo $modelo; ?>/delete", array(
				            	"id" => $data-><?php echo $v_id; ?>,
				            ))',
				        	'click'=>"function(){
							  if(!confirm('Deseja realmente excluir este item?')) return false;
							  var th = this;
							  var gridID = '#<?php echo $this->class2id($this->modelClass); ?>-grid';
							  	afterDelete = function(){};
								jQuery(gridID).yiiGridView('update', {
									type: 'POST',
									url: jQuery(this).attr('href'),
									success: function(data) {
										jQuery(gridID).yiiGridView('update');
										afterDelete(th, true, data);
									},
									error: function(XHR) {
										return afterDelete(th, false, XHR);
									}
								});
								return false;
							}",

				        ),
				    ),
				),
			),
		));
	 ?>
</div>