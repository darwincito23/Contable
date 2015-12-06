<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Administrar'=>array('admin'),	
	'Crear Tercero',
);

$this->menu=array(
	array('label'=>'Lista Tercero', 'url'=>array('index')),
	array('label'=>'Administrar Tercero', 'url'=>array('admin')),
);
?>
<br>
<br>
	<div class="container-fluid text-center">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default panel-creup">	
			<h4>Crear Tercero </h4>		
		</div>		
	</div>
	<div class="col-md-3"></div>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
				
							
			          					 
	