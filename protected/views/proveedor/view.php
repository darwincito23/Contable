<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->idProveedor,
);

$this->menu=array(
	array('label'=>'Ver Lista de Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Provedores', 'url'=>array('create')),
	array('label'=>'Actualizar Provedores', 'url'=>array('uptdate', 'id'=>$model->idProveedor)),
	array('label'=>'Eliminar Provedores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProveedor),'confirm'=>'¿Estas seguro que quieres eliminar este registro?')),
	array('label'=>'Administrar Provedores', 'url'=>array('admin')),
);
?>

<h1>Vista de Proveedor Número: <?php echo $model->idProveedor; ?></h1>

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
