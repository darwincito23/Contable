<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registrocontablegastos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> Son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valorRegistroContable'); ?>
		<?php echo $form->textField($model,'valorRegistroContable'); ?>
		<?php echo $form->error($model,'valorRegistroContable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario'); ?>
		<?php echo $form->error($model,'Usuario_idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idProveedor'); ?>
		<?php echo $form->textField($model,'Proveedor_idProveedor',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Proveedor_idProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idCuentaPuc'); ?>
		<?php echo $form->textField($model,'CuentaPuc_idCuentaPuc',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'CuentaPuc_idCuentaPuc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->