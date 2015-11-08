<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	'Create',
);
$this->menu=array(
	array('label'=>'Ver Proveedores', 'url'=>array('index')),
	array('label'=>'Administrar Proveedores', 'url'=>array('admin')),
);
?>

<div class="container">
	<div class="col-md-3"></div>
	<div class="col-md-5">
		<h1>Crear Proveedor</h1>
		
			<div class="panel panel-default">
				  <div class="panel-heading">
					<h4 class="text-center">Proveedores</h4>				  
				  </div>
				  <div class="panel-body">
					   	<div class="row">
						          	<div class="col-md-1"></div>      		
						          	<div class="col-md-10">					
										<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>														          		
						          	</div>
						          	<div class="col-md-1"></div>
						</div>	 
				  </div>
			</div>	
	</div>
	<div class="col-md-4"></div>

</div>


			
				
		
	
	



