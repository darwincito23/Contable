<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */
/* @var $form CActiveForm */
?>

<div class="form">
		<br>
		<br>
		<br>
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'registrocontablegastos-form',
			'enableAjaxValidation'=>false,
		)); ?>	

			<?php echo $form->errorSummary($model); ?>

		<p class="note">Los campos con <span class="required">*</span> Son requeridos.</p>
				<table class="table table-bordered table-striped">
				    <thead>
				        <tr>
				            
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				            <td>
					            <?php echo $form->labelEx($model,'fecha'); ?>
								<?php echo $form->textField($model,'fecha'); ?>
								<?php echo $form->error($model,'fecha'); ?>
							</td>
				            <td>
				            	<?php echo $form->labelEx($model,'nombre_Proveedor'); ?>
								<?php echo $form->dropDownList($model,'Proveedor_idProveedor',
									CHtml::listData(Proveedor::model()->findAll(),'nombreProveedor','nombreProveedor'),
									array(
											'ajax'=>array(
												'type'=>'POST',
												'url'=>CController::createUrl('Registrocontablegastos/Selectcodigoproveedor'),
												'update'=>'#'.CHtml::activeId($model,'Codigo_Proveedor'),
												)
										)
								); ?>
								<?php echo $form->error($model,'nombreProveedor'); ?>
				            </td>
				             <td>
				            	<?php echo $form->labelEx($model,'Codigo_Proveedor'); ?>
								<?php echo $form->dropDownList($model,'cprovedor',
									CHtml::listData(Proveedor::model()->findAll(),'codigoProveedor','codigoProveedor')
								); ?>
								<?php echo $form->error($model,'cprovedor'); ?>
				            </td>
				            <td>
				            	<?php echo $form->labelEx($model,'Nombre Cuenta'); ?>
								<?php echo $form->dropDownList($model,'CuentaPuc_idCuentaPuc',
									CHtml::listData(Cuentapuc::model()->findAll(),'nombreCuentaPuc','nombreCuentaPuc')
								); ?>
								<?php echo $form->error($model,'CuentaPuc_idCuentaPuc'); ?>
				            </td>
				              <td>
					            <?php echo $form->labelEx($model,'codigoCuentaPuc'); ?>
								<?php echo $form->dropDownList($model,'ccuenta',
									CHtml::listData(Cuentapuc::model()->findAll(),'codigoCuentaPuc','codigoCuentaPuc')
								); ?>
								<?php echo $form->error($model,'ccuenta'); ?>
				            </td>
				            <td>
				            	<?php echo $form->labelEx($model,'valorRegistroContable'); ?>
								<?php echo $form->textField($model,'valorRegistroContable'); ?>
								<?php echo $form->error($model,'valorRegistroContable'); ?>
				            </td>				          
				        </tr> 
				    </tbody>		
				</table>
			<div class="container text-center">
			<div class="col-md-6">
				<?php echo $form->labelEx($model,'descripcion'); ?>
					<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
					<?php echo $form->error($model,'descripcion'); ?>			
					<div class="row buttons">
						<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
					</div>
			</div>
			<div class="col-md-6"></div>
						
			</div>	
			
		<?php $this->endWidget(); ?>
</div><!-- form -->
<?php //echo $form->dropDownList($model, 'valorRegistroContable', array('MASCULINO'=>'MASCULINO', 'FEMENINO'=>'FEMENINO', 'OTRO'=>'OTRO')); ?>