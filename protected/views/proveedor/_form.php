<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	'enableAjaxValidation'=>true,
)); ?>

	

									<?php echo $form->errorSummary($model); ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
			
		<div >
		<?php echo $form->labelEx($model,'nombreProveedor'); ?>
		<?php echo $form->textField($model,'nombreProveedor',array()); ?>
		<?php echo $form->error($model,'nombreProveedor'); ?>
		</div>

		<div >
		<?php echo $form->labelEx($model,'codigoProveedor'); ?>
		<?php echo $form->textField($model,'codigoProveedor',array()); ?>
		<?php echo $form->error($model,'codigoProveedor'); ?>
		</div>
		</div>
		
	

	<div >
		<?php echo $form->labelEx($model,'numeroContacto'); ?>
		<?php echo $form->textField($model,'numeroContacto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'numeroContacto'); ?>
	
	<div >
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'NIT_CC'); ?>
		<?php echo $form->textField($model,'NIT_CC',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NIT_CC'); ?>
	</div>

	<div >
	<?php $model->setAttribute('Usuario_idUsuario',1) ?>
		<?php //echo $form->labelEx($model,'Usuario_idUsuario'); ?>
		<?php //echo $form->textField($model,'Usuario_idUsuario'); ?>
		<?php //echo $form->error($model,'Usuario_idUsuario'); ?>
	</div>
	<br>
	<div >
	<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar',array('class'=>'btn btn-primary btn-lg ')); ?>
	</div>
					          	
	

	

<?php $this->endWidget(); ?>

</div><!-- form -->