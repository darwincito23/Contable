<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCuenta'); ?>
		<?php echo $form->textField($model,'idCuenta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreCuenta'); ?>
		<?php echo $form->textField($model,'nombreCuenta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoCuenta'); ?>
		<?php echo $form->textField($model,'codigoCuenta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cuentaPadre'); ?>
		<?php echo $form->textField($model,'cuentaPadre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTipoGasto'); ?>
		<?php echo $form->textField($model,'idTipoGasto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_registro_contable_gasto'); ?>
		<?php echo $form->textField($model,'id_registro_contable_gasto',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->