<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - ecpv';
$this->breadcrumbs=array(
	'Panel Frente de Aprovechamiento',
);
?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<h1>Frente de Aprovechamiento</h1>
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
									<?php echo CHtml::submitButton('Administrar Frente Aprovechamiento', array('submit'=>array('frenteaprovechamiento/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>
									<?php echo CHtml::submitButton('Administrar Productos', array('submit'=>array('productos/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>		          		
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


	



