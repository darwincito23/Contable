<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - GOV';
$this->breadcrumbs=array(
	'GOV',
);
?>

<div class="container">		
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<contenido>

			<div class="panel panel-default">
				  <div class="panel-heading">
					<h4 class="text-center">Gastos Operativos de Venta</h4>				  
				  </div>
				  <div class="panel-body">
				   	<div class="row">
					          	<div class="col-md-1">		          		
					          	</div>
					          	<div class="col-md-10">

									<?php echo CHtml::submitButton('Gastos Operativos', array('submit'=>array('registrocontablegastos/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>
									<?php echo CHtml::submitButton('Consolidado', array('submit'=>array('consolidadogoa/index'),'class'=>'btn btn-success btn-md btn-block')); ?>
											          		
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


	



