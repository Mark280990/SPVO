<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->id_pedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_provedores')); ?>:</b>
	<?php echo CHtml::encode($data->id_provedores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bodega')); ?>:</b>
	<?php echo CHtml::encode($data->id_bodega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pedidocompra')); ?>:</b>
	<?php echo CHtml::encode($data->id_pedidocompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_compra')); ?>:</b>
	<?php echo CHtml::encode($data->id_compra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria')); ?>:</b>
	<?php echo CHtml::encode($data->categoria); ?>
	<br />

	*/ ?>

</div>