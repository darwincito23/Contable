<?php
/* @var $this ProveedorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Terceros',
);

$this->menu=array(
	array('label'=>'Crear Tercero', 'url'=>array('create')),
	array('label'=>'Administrar Tercero', 'url'=>array('admin')),
);
?>

<h1>Terceros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
