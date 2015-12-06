<?php
/* @var $this FrenteaprovechamientoproductosController */

$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),	
	'Administrar FA y Productos'=>array('/frenteaprovechamientoproductos'),
	'Crear FA con Productos'=>array('frenteaprovechamientoproductos/create/'.$model->id_FrenteAprovechamiento),
	'Update: '.$model->id_FrenteAprovechamiento,
);
?>
<?php $form=$this->beginWidget('CActiveForm', 
	array(
			'id'=>'frenteaprovechamiento-productos-create-form',
			'enableAjaxValidation'=>false,
		)); 
?>
	<div class=" form">	
		<div class="row">						
			<div class="col-md-3"></div>
			<div class="row col-md-6 text-center">
					<?php //echo $form->errorSummary($model); ?>
					<div class="row">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="text-center">Actualizar Producto en FA</h4>				  
							</div>	
							<div class="panel-body">															
								<div class="col-md-3"></div>
								<div class="col-md-3">							  
								  		<div class="row">
											<?php echo $form->labelEx($model,'Producto'); ?>
										</div><!--end row-->
										<div class="row">
											<?php echo $form->dropDownList($model,'Productos_idProductos',$model->getListProductos()); ?>
											<?php echo $form->error($model,'Productos_idProductos'); ?>
										</div><!--end row-->									
								</div>
								<div class="col-md-3">
									<div class="row">
										<?php echo $form->labelEx($model,'CostoUnitario'); ?>
									</div>	
									<div class="row">
										<?php echo $form->textField($model,'CostoUnitario'); ?>
										<?php echo $form->error($model,'CostoUnitario'); ?>
									</div>												
								</div>
								<div class="col-md-3"></div>

								<div class="row buttons">
									<div class="col-md-4"></div>
									<div class="col-md-4">
										<?php echo CHtml::submitButton('Guardar',array('class'=>'btn btn-success btn-md')); ?>
									</div>
									<div class="col-md-4"></div>
								</div>
							</div>
						</div>																		
					</div>						
			</div>
			<div class="col-md-3"></div>		
			<?php $this->endWidget(); ?>
		</div><!--end row-->
	</div><!--end form-->