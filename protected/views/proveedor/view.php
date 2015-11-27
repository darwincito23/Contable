<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->idProveedor,
);

$this->menu=array(
	array('label'=>'Lista Tercero', 'url'=>array('index')),
	array('label'=>'Crear Tercero', 'url'=>array('create')),
	array('label'=>'Actualizar Tercero', 'url'=>array('update', 'id'=>$model->idProveedor)),
	array('label'=>'Eliminar Tercero', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProveedor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'AdministrarTercero', 'url'=>array('admin')),
);
?>

<h1>Ver Tercero Número: <?php echo $model->idProveedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'idProveedor',
		'nombreProveedor',
		'codigoProveedor',
		'numeroContacto',
		'direccion',
		'NIT_CC',
		//'Usuario_idUsuario',
	),
)); ?>
