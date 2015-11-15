<?php
/* @var $this FrenteaprovechamientoProductosController */
/* @var $model FrenteaprovechamientoProductos */
/* @var $form CActiveForm */

$this->breadcrumbs=array(
	'Frenteaprovechamientoproductos'=>array('/frenteaprovechamientoproductos'),
	'Create',
);

?>


<div class="container-fluid text-center">
			<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'frenteaprovechamiento-productos-create-form',
			'enableAjaxValidation'=>false,
			)); ?>	
	<div class=" form">
		<div class="row">
			<h1>Sitio donde va el Nombre del Frente de Aprovechamiento</h1>
			<div class="row">
				<?php //echo $form->labelEx($model,'FrenteAprovechamiento_idFA'); ?>
				<?php //echo $form->textField($model,'FrenteAprovechamiento_idFA'); ?>
				<?php //echo $form->error($model,'FrenteAprovechamiento_idFA'); ?>
			</div>	
		</div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<p>Aca va el Cgrid</p>	
			</div>
			<div class="col-md-2"></div>
		</div><!--end row-->
		<div class="col-md-3"></div>
		<div class="row col-md-6">
				<?php //echo $form->errorSummary($model); ?>
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-1"></div>
							<div class="col-md-5">							  
							  		<div class="row">
										<?php echo $form->labelEx($model,'idProductos'); ?>
									</div><!--end row-->
									<div class="row">
										<?php echo $form->textField($model,'Productos_idProductos'); ?>
										<?php echo $form->error($model,'Productos_idProductos'); ?>
									</div><!--end row-->									
							</div>
							<div class="col-md-5">
								<div class="row">
									<?php echo $form->labelEx($model,'CostoUnitario'); ?>
								</div>	
								<div class="row">
									<?php echo $form->textField($model,'CostoUnitario'); ?>
									<?php echo $form->error($model,'CostoUnitario'); ?>
								</div>												
							</div>
							<div class="col-md-1"></div>
							</div>
					</div>						
				</div>	
				<div class="row buttons">
					<?php echo CHtml::submitButton('Guardar',array('class'=>'btn btn-success btn-md')); ?>
				</div>
		</div><!--end row-->
		<div class="col-md-3"></div>		
		<?php $this->endWidget(); ?>
	</div><!-- form -->
</div>




