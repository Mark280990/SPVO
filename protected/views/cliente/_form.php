<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos marcados con <span class="required">*</span> son requeridos</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Registrado por:'); ?>
		<?php echo $form->dropDownList($model, 'id_user', User::items(1), array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'RFC'); ?>
		<?php echo $form->textField($model,'rfc',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'rfc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Domicilio'); ?>
		<?php echo $form->textField($model,'domicilio',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'domicilio'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->