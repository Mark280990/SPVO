<?php
/* @var $this BodegaController */
/* @var $model Bodega */

$this->breadcrumbs=array(
	'Bodegas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bodega', 'url'=>array('index')),
	array('label'=>'Create Bodega', 'url'=>array('create')),
	array('label'=>'View Bodega', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Bodega', 'url'=>array('admin')),
);
?>

<h1>Update Bodega <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>