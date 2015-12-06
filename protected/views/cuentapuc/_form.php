<?php
	/* @var $this CuentapucController */
	/* @var $model Cuentapuc */
	/* @var $form CActiveForm */
?>

<div class="form text-center">
	<!--
		 * CActiveForm provee un grupo de métodos que pueden ayudar a 
		 * simplificar la creación de complejas e interactivas formas Html que son 
		 * asociadas con datos del modelo.
		 *$form description: Creación de cuentas PUC.	 
	 -->
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'cuentapuc-form',
		'enableAjaxValidation'=>false,
	)); ?>
	<!--Muestra una grilla con un resumen de error-->
	<?php echo $form->errorSummary($model,'Por favor soluciones los siguientes errores: '); ?>
	<!--contenedor Cuenta Padre-->
	<div class="panel panel-default">	  
		<div class="panel-body">				
			<!--Campo Cuenta Padre-->
			<div class="row">
				<!--Campo Cuenta Padre-->
				<?php echo $form->labelEx($model,'CuentaPadre'); ?>
				<!--CJuiAutoComplete-->
				<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
									array(
										//modelo=Cuentapuc
									  	'model'=>$model,
									  	//Columna CuentaPadre de la tabla cuentapuc que es un Id de cuenta
										'attribute'=>'CuentaPadre',
										//Ruta de la función obtenerCodigoNombre()
									  	'source'=>$model->obtenerCodigoNombre(), //match case when performing a lookup?	
										//En la propiedad options se pasan las opciones al JUI autocomplete plugin
										'options'=>array(
															//Define el Número de caracteres para empezar el autocompletado.
										  					'minLength'=>'1',
										  					/**función que selecciona el valor ingresado en el campo le hace un split y asigna el inidice 0 a la variable codigoc
											  					* var valor=ui.item.value; captura el valor en el campo
											  					* var sp=valor.split("<->");realizar un split donde encuentre el caracter <->
											  					* $("#codigoc").val(sp[0]); le asigna el valor del indice 0 del split guardado en sp a la variable codigoc
											  					*/
										 					'select'=>'js:function( event, ui ) 
										 					{
											  					var valor=ui.item.value;
											  					var sp=valor.split("/");
											  					$("#codigoc").val(sp[0]);                
											  					return true;  
									 						}',
														),
									 'htmlOptions'=>array('size'=>'40','class'=>'text-center'), 
									 ));?>
				<!--describe el error mediante validación ajax-->
				<?php echo $form->error($model,'CuentaPadre'); ?>
			</div> <!--End Campo Cuenta Padre-->			
			<!--Prefijo Cuenta Padre-->
			<div class="row">
				<?php echo $form->labelEx($model,'prefijo'); ?>
				<?php echo $form->textField($model,'prefijo',array('size'=>15,'readonly'=>true,'maxlength'=>20,'id'=>'codigoc','class'=>'text-center')); ?>
			</div><!--End Prefijo Cuenta Padre-->
		</div><!--end panelbody-->
	</div><!--end contenedor cuentapadre-->

	<!--contenedor Cuenta PUC-->
	<div class="panel panel-default">	  
		<div class="panel-body">			
			<div class="row">		
				<?php echo $form->labelEx($model,'nombreCuentaPuc'); ?>
				<?php echo $form->textField($model,'nombreCuentaPuc',array('size'=>45,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'nombreCuentaPuc'); ?>		
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model,'codigoCuentaPuc'); ?>
				<?php echo $form->textField($model,'codigoCuentaPuc',array('size'=>45,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'codigoCuentaPuc'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model,'TipoGasto'); ?>
				<?php echo $form->dropDownList($model,'TipoGasto_idTipoGasto',$model->getTipoGasto(),array()); ?>
				<?php echo $form->error($model,'TipoGasto_idTipoGasto'); ?>
			</div>
		</div><!--end panelbody-->
	</div><!--end contenedor cuentaPUC-->

	
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario',array('size'=>45,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Usuario_idUsuario'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save',array('class'=>'btn btn-success btn-md ')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->