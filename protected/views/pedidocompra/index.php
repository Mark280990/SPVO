<?php
/* @var $this PedidocompraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedidocompras',
);

$this->menu=array(
	array('label'=>'Create Pedidocompra', 'url'=>array('create')),
	array('label'=>'Manage Pedidocompra', 'url'=>array('admin')),
);
?>

<h1>Pedidocompras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
