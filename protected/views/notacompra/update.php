<?php
/* @var $this NotacompraController */
/* @var $model Notacompra */

$this->breadcrumbs=array(
	'Notacompras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Notacompra', 'url'=>array('index')),
	array('label'=>'Create Notacompra', 'url'=>array('create')),
	array('label'=>'View Notacompra', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Notacompra', 'url'=>array('admin')),
);
?>

<h1>Update Notacompra <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>