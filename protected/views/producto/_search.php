<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pedido'); ?>
		<?php echo $form->textField($model,'id_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_provedores'); ?>
		<?php echo $form->textField($model,'id_provedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bodega'); ?>
		<?php echo $form->textField($model,'id_bodega'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pedidocompra'); ?>
		<?php echo $form->textField($model,'id_pedidocompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_compra'); ?>
		<?php echo $form->textField($model,'id_compra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria'); ?>
		<?php echo $form->textField($model,'categoria',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->