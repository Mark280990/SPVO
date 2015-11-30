<?php
/* @var $this BodegaController */
/* @var $data Bodega */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_producto')); ?>:</b>
	<?php echo CHtml::encode($data->id_producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pedido')); ?>:</b>
	<?php echo CHtml::encode($data->id_pedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />


</div>