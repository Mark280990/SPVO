<?php
/* @var $this ProvedoresController */
/* @var $model Provedores */

$this->breadcrumbs=array(
	'Provedores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Provedores', 'url'=>array('index')),
	array('label'=>'Create Provedores', 'url'=>array('create')),
	array('label'=>'Update Provedores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Provedores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Provedores', 'url'=>array('admin')),
);
?>

<h1>View Provedores #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'telefono',
		'direccion',
		'nombre',
	),
)); ?>
