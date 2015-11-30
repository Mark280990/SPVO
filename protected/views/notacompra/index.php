<?php
/* @var $this NotacompraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Notacompras',
);

$this->menu=array(
	array('label'=>'Create Notacompra', 'url'=>array('create')),
	array('label'=>'Manage Notacompra', 'url'=>array('admin')),
);
?>

<h1>Notacompras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
