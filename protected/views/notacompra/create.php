<?php
/* @var $this NotacompraController */
/* @var $model Notacompra */

$this->breadcrumbs=array(
	'Notacompras'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Notacompra', 'url'=>array('index')),
	array('label'=>'Manage Notacompra', 'url'=>array('admin')),
);
?>

<h1>Create Notacompra</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>