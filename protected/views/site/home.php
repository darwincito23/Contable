<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<h1>Bienvenido al Módulo Contable</h1>
		</div>
		<div class="col-md-3"></div>
	</div>	
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<contenido>

			<div class="panel panel-default">
				  <div class="panel-heading">
					<h2 class="text-center">Módulos</h2>				  
				  </div>
				  <div class="panel-body">
				   	<div class="row">
					          	<div class="col-md-1">		          		
					          	</div>
					          	<div class="col-md-10">

									<?php echo CHtml::submitButton('GOA', array('submit'=>array('site/goa'),'class'=>'btn btn-primary btn-lg btn-block')); ?>
									<?php echo CHtml::submitButton('GCOV', array('submit'=>array('site/gov'),'class'=>'btn btn-primary btn-lg btn-block')); ?>
									<?php echo CHtml::submitButton('ECPV', array('submit'=>array('usuarios/list'),'class'=>'btn btn-primary btn-lg btn-block')); ?>
									<?php echo CHtml::submitButton('Administrar Terceros', array('submit'=>array('proveedor/index'),'class'=>'btn btn-primary btn-lg btn-block')); ?>
									<?php echo CHtml::submitButton('Administrar Cuentas PUC', array('submit'=>array('usuarios/list'),'class'=>'btn btn-primary btn-lg btn-block')); ?>									
														          		
					          	</div>
					          	<div class="col-md-1">        		
				          		</div>
					</div>	 
				  </div>
			</div>	
				
		</contenido>
	</div>
	<div class="col-md-4"></div>

</div>


	



