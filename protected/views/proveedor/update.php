<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->idProveedor=>array('view','id'=>$model->idProveedor),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Ver List de Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Proveedor', 'url'=>array('create')),
	array('label'=>'Ver Proveedores', 'url'=>array('view', 'id'=>$model->idProveedor)),
	array('label'=>'Aministrar Proveedores', 'url'=>array('admin')),
);
?>

<h1>Update Proveedor <?php echo $model->idProveedor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>