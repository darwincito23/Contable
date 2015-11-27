<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->idProveedor=>array('view','id'=>$model->idProveedor),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista Tercero', 'url'=>array('index')),
	array('label'=>'Crear Tercero', 'url'=>array('create')),
	array('label'=>'Ver Tercero', 'url'=>array('view', 'id'=>$model->idProveedor)),
	array('label'=>'Administrar Tercero', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tercero <?php echo $model->idProveedor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>