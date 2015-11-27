<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	'enableAjaxValidation'=>false,
)); ?>
	
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreProveedor'); ?>
		<?php echo $form->textField($model,'nombreProveedor',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoProveedor'); ?>
		<?php echo $form->textField($model,'codigoProveedor',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigoProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroContacto'); ?>
		<?php echo $form->textField($model,'numeroContacto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'numeroContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIT_CC'); ?>
		<?php echo $form->textField($model,'NIT_CC',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NIT_CC'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario'); ?>
		<?php echo $form->error($model,'Usuario_idUsuario'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save',array('class'=>'btn btn-success btn-md')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->