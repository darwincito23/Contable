



<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<h1>Estado de Costos de Productos Vendidos</h1>
		</div>
		<div class="col-md-3"></div>
	</div>	
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<contenido>

			<div class="panel panel-default">
				  
				  <div class="panel-body">
				   	<div class="row">
					          	<div class="col-md-1">		          		
					          	</div>
					          	<div class="col-md-10">												          			
									<?php echo CHtml::submitButton('Frente Aprovechamiento', array('submit'=>array('frenteaprovechamiento/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>
									<?php echo CHtml::submitButton('Productos', array('submit'=>array('productos/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>
									<?php echo CHtml::submitButton('Frente Aprovechamiento / Productos', array('submit'=>array('productos/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>
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
