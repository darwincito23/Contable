<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proveedor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idProveedor'); ?>
		<?php echo $form->textField($model,'idProveedor'); ?>
		<?php echo $form->error($model,'idProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreProveedor'); ?>
		<?php echo $form->textField($model,'nombreProveedor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoProveedor'); ?>
		<?php echo $form->textField($model,'codigoProveedor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigoProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroContacto'); ?>
		<?php echo $form->textField($model,'numeroContacto',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'numeroContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nit_cc'); ?>
		<?php echo $form->textField($model,'nit_cc',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'nit_cc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_registro_contable_gastos'); ?>
		<?php echo $form->textField($model,'id_registro_contable_gastos',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id_registro_contable_gastos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->