<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->idProductos,
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
	array('label'=>'Actualizar Productos', 'url'=>array('update', 'id'=>$model->idProductos)),
	array('label'=>'Eliminar Productos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProductos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<h1>Ver Productos Número: <?php echo $model->idProductos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'idProductos',
		'nombreProducto',
		//'Usuario_idUsuario',
	),
)); ?>
