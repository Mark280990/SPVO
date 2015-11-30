<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista de clientes', 'url'=>array('index')),
	array('label'=>'Administrar clientes', 'url'=>array('admin')),
);
?>

<h1>Registrar Cliente</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>