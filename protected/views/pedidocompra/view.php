<?php
/* @var $this PedidocompraController */
/* @var $model Pedidocompra */

$this->breadcrumbs=array(
	'Pedidocompras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Pedidocompra', 'url'=>array('index')),
	array('label'=>'Create Pedidocompra', 'url'=>array('create')),
	array('label'=>'Update Pedidocompra', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pedidocompra', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedidocompra', 'url'=>array('admin')),
);
?>

<h1>View Pedidocompra #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_notacompra',
		'id_cliente',
		'id_user',
		'id_producto',
		'total',
	),
)); ?>
