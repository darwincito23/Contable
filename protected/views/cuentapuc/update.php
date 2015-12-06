UC<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Administrar Cuentas PUC'=>array('admin'),
	'Actualizar: '.$model->nombreCuentaPuc=>array('view','id'=>$model->idCuentaPuc),
	
);

$this->menu=array(
	array('label'=>'Lista de Cuentas PUC', 'url'=>array('index')),
	array('label'=>'Crear Cuenta PUC', 'url'=>array('create')),
	array('label'=>'Ver Cuenta PUC', 'url'=>array('view', 'id'=>$model->idCuentaPuc)),
	array('label'=>'Adminsitrar Cuenta PUC', 'url'=>array('admin')),
);
?>
<br>
<br>
<div class="container">
	<div class="col-md-3"></div>
	<div class="col-md-5">		
			<div class="panel panel-default">
				  <div class="panel-heading">
					<h4 class="text-center">Actualizar Cuenta Puc: <?php echo $model->nombreCuentaPuc; ?></h4>				  
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