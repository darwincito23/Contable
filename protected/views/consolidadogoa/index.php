<?php
/* @var $this ConsolidadoGoaGovController */
/* @var $model ConsolidadoGoaGov */
/* @var $form CActiveForm */
?>

<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'consolidado-goa-gov-index-form',
				'enableAjaxValidation'=>false,
			)); ?>			
			<?php echo $form->errorSummary($model); ?>
				<table class="table table-bordered table-striped">
				    <thead>
				        <tr>
				            
				        </tr>
				    </thead>
				    <tbody>		   		
				        <tr class="tablacolor">
							<td>	
								<?php echo $form->labelEx($model,'fecha_Inicio'); ?>
								<?php echo $form->textField($model,'fecha_Inicio'); ?>
								<?php echo $form->error($model,'fecha_Inicio'); ?>
								<?php  $this->widget('zii.widgets.jui.CJuiDatePicker',array(
								      'model'=>$model,
								      'attribute'=>'fecha_Inicio',
								      // additional javascript options for the date picker plugin
								      'options'=>array(
								          'showAnim'=>'fold',
								          'dateFormat' => 'yy-mm-dd'
								      ),
								      'htmlOptions'=>array(
								          'style'=>'height:20px;'
								      ),
								  ),true);
								?>
							</td>
							<td>
								<?php echo $form->labelEx($model,'fecha_fin'); ?>
								<?php echo $form->textField($model,'fecha_fin'); ?>
								<?php echo $form->error($model,'fecha_fin'); ?>	
								<?php  $this->widget('zii.widgets.jui.CJuiDatePicker',array(
								      'model'=>$model,
								      'attribute'=>'fecha_fin',
								      // additional javascript options for the date picker plugin
								      'options'=>array(
								          'showAnim'=>'fold',
								          'dateFormat' => 'yy-mm-dd'
								      ),
								      'htmlOptions'=>array(
								          'style'=>'height:20px;'
								      ),
								  ),true);
								?>			
							</td>																		
				        </tr> 
				        <tr>
				        	<td>
								<?php echo $form->labelEx($model,'Cuenta'); ?>
								<?php echo $form->textField($model,'RegistroContableGastos_idRegistroContableGastos'); ?>
								<?php echo $form->error($model,'RegistroContableGastos_idRegistroContableGastos'); ?>			
							</td>
							<td>
								<?php echo $form->labelEx($model,'Tercero'); ?>
								<?php echo $form->textField($model,'RegistroContableGastos_idRegistroContableGastos'); ?>
								<?php echo $form->error($model,'RegistroContableGastos_idRegistroContableGastos'); ?>
							</td>					
				        </tr>				        
				    </tbody>		
				</table>
				<div class="row text-center">
						<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-success")); ?>
				</div>
			<?php $this->endWidget(); ?>
		</div><!-- form -->
	</div>
	<div class="col-md-4"></div>
</div>

<div class="container-fluid">	
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="row text-center">
			<p>
				espacio para el widget
			</p>
		</div>
		<div class="row text-center">
			<?php echo $form->labelEx($model,'Total'); ?>
			<?php echo $form->textField($model,'Total'); ?>
			<?php echo $form->error($model,'Total'); ?>
		</div>					
	</div>
	<div class="col-md-2"></div>
</div>
	
	
						
	
						<!--<?php echo $form->labelEx($model,'idConsolidado_GOA_GOV'); ?>
						<?php echo $form->textField($model,'idConsolidado_GOA_GOV'); ?>
						<?php echo $form->error($model,'idConsolidado_GOA_GOV'); ?>	-->								
												
						