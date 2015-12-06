<div class="container">		
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<contenido>
<h1 class="text-center">Inicio</h1>
			<div class="panel panel-default">
				  <div class="panel-heading">
					<h4 class="text-center">Bienvenido al Módulo Contable Distriguadua</h4>				  
				  </div>
				  <div class="panel-body">
				   	<div class="row">
					          	<div class="col-md-1">		          		
					          	</div>
					          	<div class="col-md-10">

									<?php echo CHtml::submitButton('GOA', array('submit'=>array('site/goa'),'class'=>'btn btn-success btn-md btn-block')); ?>
									<?php echo CHtml::submitButton('GCOV', array('submit'=>array('site/gov'),'class'=>'btn btn-success btn-md btn-block')); ?>
									<?php echo CHtml::submitButton('ECPV', array('submit'=>array('site/ecpv'),'class'=>'btn btn-success btn-md btn-block')); ?>
									<?php echo CHtml::submitButton('Administrar Terceros', array('submit'=>array('proveedor/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>
									<?php echo CHtml::submitButton('Administrar Cuentas PUC', array('submit'=>array('usuarios/list'),'class'=>'btn btn-success btn-md btn-block')); ?>									
														          		
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


	



