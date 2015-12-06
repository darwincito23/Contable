<?php
/* @var $this FrenteaprovechamientoProductosController */
/* @var $model Frenteaprovechamientoproductos */
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	//'ECPV':etiqueta de la miga de pan, dirección del enlace
	'ECPV'=>array('site/ecpv'),	
	'Administrar FA y Productos',
);

?>
<div class="container-fluid text-center">
	<div class="col-md-3"></div>
	<div class="col-md-6">	
		<!--Escogencia FA-->
		<div class="row">
			<div class="panel panel-default">				
					<div class="panel-heading">
							<h4 class="text-center">Ingresar Productos a FA</h4>				  
					</div>
					<div class="panel-body">
						<div class="form">						
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'frenteaprovechamiento-productos-index-form',
								'enableAjaxValidation'=>false,
							)); ?>

								<?php echo $form->errorSummary($model,'Por favor Soluciones los Siguientes errores: '); ?>

								<div class="row">
									<?php echo $form->labelEx($model,'Escoja el Frente de Aprovechamiento'); ?>
									<?php echo $form->dropDownList($model,'id_FrenteAprovechamiento',$model->getListFa()); ?>
									<?php echo $form->error($model,'id_FrenteAprovechamiento');?>
								</div>				

								<div class="row buttons">
									<?php echo CHtml::submitButton('Siguiente',array('class'=>'btn btn-success btn-md')); ?>
								</div>

							<?php $this->endWidget(); ?>

						</div><!-- form -->
					</div>
			</div>
		</div><!--end Escogencia FA-->		
		
		<div class="row">			
			<div class="panel panel-default ">
					  <div class="panel-heading">
							<h4 class="text-center">Administrar</h4>				  
						</div>
					  <div class="panel-body">
					   	<div class="row">
						          	<div class="col-md-2">		          		
						          	</div>
						          	<div class="col-md-8">	
						          	<h4 class="h4negra">Crear y administrar FA y productos</h4>							
										<?php echo CHtml::submitButton('Administrar Frente Aprovechamiento', array('submit'=>array('frenteaprovechamiento/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>
										<?php echo CHtml::submitButton('Administrar Productos', array('submit'=>array('productos/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>		          		
						          	</div>
						          	<div class="col-md-2">        		
					          		</div>
						</div>	 
					  </div>
				</div>			
		</div>
	</div>
	<div class="col-md-4"></div>
</div>

