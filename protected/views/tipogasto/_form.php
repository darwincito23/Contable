<?php
/* @var $this TipogastoController */
/* @var $model Tipogasto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipogasto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idTipoGasto'); ?>
		<?php echo $form->textField($model,'idTipoGasto'); ?>
		<?php echo $form->error($model,'idTipoGasto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreTipoGasto'); ?>
		<?php echo $form->textField($model,'nombreTipoGasto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreTipoGasto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->