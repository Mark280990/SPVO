<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Clientes', 'url'=>array('index')),
	array('label'=>'Registrar Cliente', 'url'=>array('create')),
	array('label'=>'Actualizar Cliente', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Cliente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de que deseas eliminirar al Cliente?')),
	array('label'=>'Administrar Cliente', 'url'=>array('admin')),
);
?>

<h1>Clientes <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'nombre',
		'rfc',
		'domicilio',
	),
)); ?>
