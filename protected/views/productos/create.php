<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),	
	'Adminsitrar FA y Productos'=>array('frenteaprovechamientoproductos/index'),
	'Administrar Productos'=>array('admin'),
	'Crear Producto',
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
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
				<h2 class="text-center">Crear Producto</h2>				  
			</div>	
			<div class="panel-body text-center">
				<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>