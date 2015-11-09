<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */
/* @var $form CActiveForm */
?>
<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="form">		
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'registrocontablegastos-form',
			'enableAjaxValidation'=>false,
		)); ?>	

			<?php echo $form->errorSummary($model); ?>
	
				<table class="table table-bordered table-striped">
				    <thead>
				        <tr>
				            
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				            <td>
					            <?php echo $form->labelEx($model,'fecha'); ?>				
								<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker',array(
								      'model'=>$model,
								      'attribute'=>'fecha',
								      // additional javascript options for the date picker plugin
								      'options'=>array(
								          'showAnim'=>'fold',
								          'dateFormat'=>'yy-mm-dd',
								      ),
								      'htmlOptions'=>array(
								          'style'=>'height:20px;'
								      ),
								  ),true);
								?>		
								<?php echo $form->error($model,'fecha'); ?>					
							</td>
				            
				            <td>
				            	<?php echo $form->labelEx($model,'nombre_Tercero'); ?>
								
								<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
          								array(
           								  	'model'=>$model,
      										'attribute'=>'Proveedor_idProveedor',
           								  	'source'=>$model->obtenerCodigoNombre('proveedor'), //match case when performing a lookup?	
 											'options'=>array(
        								  					'minLength'=>'2',
         								 					'select'=>'js:function( event, ui ) {
          								  					var valor=ui.item.value;
          								  					var sp=valor.split("<->");
          								  					$("#codigop").val(sp[0]);
          								  					$("#nombrep").val(sp[1]);                
          								  					return true;  
       								 						}',
 	   													),
            								 'htmlOptions'=>array('size'=>'40'), 
            								 ));?>

    											
								<?php echo $form->error($model,'nombreProveedor'); ?>
								
								<?php echo $form->hiddenField($model,'cproveedor',
								array('id'=>'codigop'
								)); ?>
								<?php echo $form->hiddenField($model,'nproveedor',
								array('id'=>'nombrep'
								)); ?>
								
				            </td>
				            
				            <td>
				            	<?php echo $form->labelEx($model,'Nombre Cuenta'); ?>
								<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
          								array(
           								  	'model'=>$model,
      										'attribute'=>'CuentaPuc_idCuentaPuc',
           								  	'source'=>$model->obtenerCodigoNombre('cuentapuc'), //match case when performing a lookup?	
 											'options'=>array(
        								  					'minLength'=>'1',
         								 					'select'=>'js:function( event, ui ) {
          								  					var valor=ui.item.value;
          								  					var sp=valor.split("<->");
          								  					$("#codigoc").val(sp[0]);
          								  					$("#nombrec").val(sp[1]);                
          								  					return true;  
       								 						}',
 	   													),
            								 'htmlOptions'=>array('size'=>'40'), 
            								 ));?>
								
								<?php echo $form->error($model,'CuentaPuc_idCuentaPuc'); ?>
				            
								<?php echo $form->hiddenField($model,'ncuenta',
								array('id'=>'nombrec'
								)); ?>
								<?php echo $form->hiddenField($model,'ccuenta',
								array('id'=>'codigoc'
								)); ?>
				            </td>
				            <td>
				            	<?php echo $form->labelEx($model,'valorRegistroContable'); ?>
								<?php echo $form->textField($model,'valorRegistroContable'); ?>
								<?php echo $form->error($model,'valorRegistroContable'); ?>
				            </td>				          
				        </tr> 
				    </tbody>		
				</table>
			<div class="container-fluid text-center">
			
				<?php echo $form->labelEx($model,'descripcion'); ?>
					<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'descripcion'); ?>			
					<div class="row buttons">
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success')); ?>
					</div>
			</div>
			
						
			</div>	
			
		<?php $this->endWidget(); ?>
</div><!-- form -->
<?php //echo $form->dropDownList($model, 'valorRegistroContable', array('MASCULINO'=>'MASCULINO', 'FEMENINO'=>'FEMENINO', 'OTRO'=>'OTRO')); ?>
	</div>
	<div class="col-md-1"></div>
</div>
