<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pedido'); ?>
		<?php echo $form->textField($model,'id_pedido'); ?>
		<?php echo $form->error($model,'id_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_provedores'); ?>
		<?php echo $form->textField($model,'id_provedores'); ?>
		<?php echo $form->error($model,'id_provedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_bodega'); ?>
		<?php echo $form->textField($model,'id_bodega'); ?>
		<?php echo $form->error($model,'id_bodega'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pedidocompra'); ?>
		<?php echo $form->textField($model,'id_pedidocompra'); ?>
		<?php echo $form->error($model,'id_pedidocompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_compra'); ?>
		<?php echo $form->textField($model,'id_compra'); ?>
		<?php echo $form->error($model,'id_compra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria'); ?>
		<?php echo $form->textField($model,'categoria',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'categoria'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->