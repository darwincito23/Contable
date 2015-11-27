<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	$model->idProductos=>array('view','id'=>$model->idProductos),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
	array('label'=>'Ver Productos', 'url'=>array('view', 'id'=>$model->idProductos)),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<div class="container text-center">
	<h1>Actualizar Productos <?php echo $model->idProductos; ?></h1>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

