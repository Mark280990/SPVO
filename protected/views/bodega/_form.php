<?php
/* @var $this BodegaController */
/* @var $model Bodega */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bodega-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_producto'); ?>
		<?php echo $form->textField($model,'id_producto'); ?>
		<?php echo $form->error($model,'id_producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pedido'); ?>
		<?php echo $form->textField($model,'id_pedido'); ?>
		<?php echo $form->error($model,'id_pedido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->