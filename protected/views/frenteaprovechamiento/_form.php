<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'frenteaprovechamiento-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreFrenteAprovechamiento'); ?>
		<?php echo $form->textField($model,'nombreFrenteAprovechamiento',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreFrenteAprovechamiento'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario'); ?>
		<?php echo $form->error($model,'Usuario_idUsuario'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->