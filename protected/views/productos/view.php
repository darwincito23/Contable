<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),	
	'Adminsitrar FA y Productos'=>array('frenteaprovechamientoproductos/index'),
	'Administrar Productos'=>array('admin'),	
	'Ver Producto: '.$model->nombreProducto,
	
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
	array('label'=>'Actualizar Productos', 'url'=>array('update', 'id'=>$model->idProductos)),
	array('label'=>'Eliminar Productos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProductos),'confirm'=>'Esta seguro que desea eliminar este elemento?')),
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
			<h2 class="text-center"><?php echo $model->nombreProducto; ?></h2>				  
			</div>
			<div class="panel-body">

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'idProductos',
						'nombreProducto',
						//'Usuario_idUsuario',
					),
				)); ?>
			</div>
		</div>

	</div>
	<div class="col-md-3"></div>
</div>
