<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idRegistroContableGastos'); ?>
		<?php echo $form->textField($model,'idRegistroContableGastos',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valorRegistroContable'); ?>
		<?php echo $form->textField($model,'valorRegistroContable'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Proveedor_idProveedor'); ?>
		<?php echo $form->textField($model,'Proveedor_idProveedor',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CuentaPuc_idCuentaPuc'); ?>
		<?php echo $form->textField($model,'CuentaPuc_idCuentaPuc',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->