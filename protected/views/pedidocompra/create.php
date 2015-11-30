<?php
/* @var $this PedidocompraController */
/* @var $model Pedidocompra */

$this->breadcrumbs=array(
	'Pedidocompras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pedidocompra', 'url'=>array('index')),
	array('label'=>'Manage Pedidocompra', 'url'=>array('admin')),
);
?>

<h1>Create Pedidocompra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>