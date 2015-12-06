<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),	
	'Adminsitrar FA y Productos'=>array('frenteaprovechamientoproductos/index'),
	'Administrar Productos'=>array('admin'),
	//Actualizar Producto: etiqueta 
	//$model->nombreProducto: Muestra el nombre del producto actual
	//array('view','id'=>$model->idProductos):ruta de archivo
	'Actualizar Producto: '.$model->nombreProducto=>array('view','id'=>$model->idProductos),
	
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
	array('label'=>'Ver Productos', 'url'=>array('view', 'id'=>$model->idProductos)),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>
<br>
<br>
<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">				
			<div class="panel-heading">
				<h2 class="text-center">Actualizar Producto <?php echo $model->nombreProducto; ?></h2>				  
			</div>	
			<div class="panel-body text-center">
				<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>
			

