<?php
/* @var $this ProvedoresController */
/* @var $model Provedores */

$this->breadcrumbs=array(
	'Provedores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Provedores', 'url'=>array('index')),
	array('label'=>'Manage Provedores', 'url'=>array('admin')),
);
?>

<h1>Create Provedores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>