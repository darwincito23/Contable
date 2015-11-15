<?php
/* @var $this ConsolidadoGoaGovController */
/* @var $model ConsolidadoGoaGov */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerScript('re-install-date-picker', "
function reinstallDatePicker(id, data) {
        //use the same parameters that you had set in your widget else the datepicker will be refreshed by default
    $('#fecha_i').datepicker(jQuery.extend({'dateFormat':'yy-mm-dd'}));
    $('#fecha_f').datepicker(jQuery.extend({'dateFormat':'yy-mm-dd'}));
}
");
?>
<?php Yii::app()->clientScript->registerScript('search', "
$('#boton').submit(function(){
	$('#consolidadogoagov-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1 class="text-center">Consolidado GOA/GOV</h1>
<br>
<div class="container-fluid">
	<div class="col-md-2"></div>
	<div class="col-md-8">
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
							<td class="text-center">	
								<?php echo $form->labelEx($model,'fecha_Inicio'); ?>
								<?php echo $form->error($model,'fecha_Inicio'); ?>
								<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker',array(
								      'model'=>$model,
								      'attribute'=>'fecha_Inicio',
								      // additional javascript options for the date picker plugin
								      'options'=>array(
								          'showAnim'=>'fold',
								          'dateFormat' => 'yy-mm-dd'
								      ),
								      'htmlOptions'=>array(
								          'style'=>'height:20px;',
								          'id'=>'fecha_i'
								      ),
								  ),true);
								?>
							</td>
							<td class="text-center">
								<?php echo $form->labelEx($model,'fecha_fin'); ?>
								<?php echo $form->error($model,'fecha_fin'); ?>	
								<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker',array(
								      'model'=>$model,
								      'attribute'=>'fecha_fin',
								      // additional javascript options for the date picker plugin
								      'options'=>array(
								          'showAnim'=>'fold',
								          'dateFormat' => 'yy-mm-dd'
								      ),
								      'htmlOptions'=>array(
								          'style'=>'height:20px;',
								          'id'=>'fecha_f',
								      ),
								  ),true);
								?>			
							</td>																		
				        </tr> 
				        <tr>
				        	<td class="text-center">
									<?php echo $form->labelEx($model,'cuentac'); ?>
												
									<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
          								array(
           								  	'model'=>$model,
      										'attribute'=>'cuentac',
           								  	'source'=>Registrocontablegastos::model()->obtenerCodigoNombre('cuentapuc'),
           								  	'options'=>array(
        								  					'minLength'=>'1',
        								  					'select'=>'js:function( event, ui ) {
          								  					var valor=ui.item.value;
          								  					var sp=valor.split("<->");
          								  					$("#codigoc").val(sp[0]);               
          								  					return true;  
       								 						}'
        								  					), //match case when performing a lookup?	
            								 'htmlOptions'=>array('size'=>'40'), 
            								 ));?>
									<?php echo $form->error($model,'RegistroContableGastos_idRegistroContableGastos'); ?>
									<?php echo $form->hiddenField($model,'codigoc',
													array('id'=>'codigoc'
													)); ?>			
							</td>
							<td class="text-center">
								    <?php echo $form->labelEx($model,'Proveedor'); ?>
								    <?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
											array(
											  	'model'=>$model,
												'attribute'=>'proveedorc',
											  	'source'=>Registrocontablegastos::model()->obtenerCodigoNombre('proveedor'),
											  	'options'=>array(
										  					'minLength'=>'1',
										  					'select'=>'js:function( event, ui ) {
											  					var valor=ui.item.value;
											  					var sp=valor.split("<->");
											  					$("#codigop").val(sp[0]);                
											  					return true;  
										 						}'
										  					), //match case when performing a lookup?	
											 'htmlOptions'=>array('size'=>'40'), 
											 ));?>

									<?php echo $form->hiddenField($model,'codigop',
										array('id'=>'codigop'
									)); ?>					
									<?php echo $form->error($model,'RegistroContableGastos_idRegistroContableGastos'); ?>
							</td>					
				        </tr>				        
				    </tbody>		
				</table>
				<div class="row text-center">
						<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-success",'id'=>'boton')); ?>
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
				<?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'consolidadogoagov-grid',
				'dataProvider'=>$model->searchAll($model->fecha_Inicio,
										$model->fecha_fin,
										$model->proveedorc!=''?Registrocontablegastos::model()->findId('proveedor',$model->codigop):'',
										$model->cuentac!=''?Registrocontablegastos::model()->findId('cuentapuc',$model->codigoc):''),
										'afterAjaxUpdate'=>'reinstallDatePicker',
				'columns'=>array(
		
									array(
										'name'=>'fecha',
										'value'=>'$data->fecha',
										'header'=>'Fecha',
										),
									array(
										'name'=>'proveedor',
										'value'=>'$data->proveedorIdProveedor->codigoProveedor.\'<->\'.$data->proveedorIdProveedor->nombreProveedor',
										'header'=>'Proveedor',
										),
									array(
										'name'=>'cuenta',
										'value'=>'$data->cuentaPucIdCuentaPuc->codigoCuentaPuc.\'<->\'.$data->cuentaPucIdCuentaPuc->nombreCuentaPuc',
										'header'=>'CuentaPuc',
										),
									array(
										'name'=>'valor',
										'value'=>'$data->valorRegistroContable',
										'header'=>'Valor',
										),
							
								),
				));?>
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
												
						