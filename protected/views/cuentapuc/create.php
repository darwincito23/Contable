UC<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentapucs'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Cuentas PUC', 'url'=>array('index')),
	array('label'=>'Administrar Cuenta PUC', 'url'=>array('admin')),
);
?>

<div class="container">
	<div class="col-md-3"></div>
	<div class="col-md-5">
		
			<div class="panel panel-default">				
				  <div class="panel-heading">
					<h4 class="text-center">Crear Cuenta PUC</h4>				  
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