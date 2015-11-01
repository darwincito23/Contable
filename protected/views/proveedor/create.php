<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Provedor'=>array('index'),
	'Ingresar',
);

$this->menu=array(
	array('label'=>'Ver Proveedores', 'url'=>array('index')),
	array('label'=>'Regresar', 'url'=>array('admin')),
);
?>

<h1>Ingresar Proveedores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>