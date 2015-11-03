<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="container">
	<h1>Bienvenido al Módulo Contable <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
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
					          		<button type="button" class="btn btn-primary btn-lg btn-block">GOA</button>
									<button type="button" class="btn btn-primary btn-lg btn-block">GCOV</button>
									<button type="button" class="btn btn-primary btn-lg btn-block">ECPV</button>
									<button type="button" class="btn btn-primary btn-lg btn-block">Administrar Terceros</button>
									<button type="button" class="btn btn-primary btn-lg btn-block">Administrar Cuentas PUC</button>	
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


	



