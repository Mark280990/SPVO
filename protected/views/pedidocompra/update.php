<?php
/* @var $this PedidocompraController */
/* @var $model Pedidocompra */

$this->breadcrumbs=array(
	'Pedidocompras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedidocompra', 'url'=>array('index')),
	array('label'=>'Create Pedidocompra', 'url'=>array('create')),
	array('label'=>'View Pedidocompra', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pedidocompra', 'url'=>array('admin')),
);
?>

<h1>Update Pedidocompra <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>