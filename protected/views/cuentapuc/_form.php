<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cuentapuc-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreCuentaPuc'); ?>
		<?php echo $form->textField($model,'nombreCuentaPuc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreCuentaPuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoCuentaPuc'); ?>
		<?php echo $form->textField($model,'codigoCuentaPuc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigoCuentaPuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TipoGasto_idTipoGasto'); ?>
		<?php echo $form->textField($model,'TipoGasto_idTipoGasto',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'TipoGasto_idTipoGasto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CuentaPadre'); ?>
		<?php echo $form->textField($model,'CuentaPadre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'CuentaPadre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario'); ?>
		<?php echo $form->error($model,'Usuario_idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->