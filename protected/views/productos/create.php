<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'Productoses'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<div class="container text-center">
	<h1>Crear Productos</h1>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
<