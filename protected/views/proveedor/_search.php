<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idProveedor'); ?>
		<?php echo $form->textField($model,'idProveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreProveedor'); ?>
		<?php echo $form->textField($model,'nombreProveedor',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoProveedor'); ?>
		<?php echo $form->textField($model,'codigoProveedor',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numeroContacto'); ?>
		<?php echo $form->textField($model,'numeroContacto',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>120)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nit_cc'); ?>
		<?php echo $form->textField($model,'nit_cc',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_registro_contable_gastos'); ?>
		<?php echo $form->textField($model,'id_registro_contable_gastos',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->