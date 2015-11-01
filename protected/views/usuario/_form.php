<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_Usuario'); ?>
		<?php echo $form->textField($model,'id_Usuario'); ?>
		<?php echo $form->error($model,'id_Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreUsuario'); ?>
		<?php echo $form->textField($model,'nombreUsuario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ocupacion'); ?>
		<?php echo $form->textField($model,'ocupacion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ocupacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numeroConctacto'); ?>
		<?php echo $form->textField($model,'numeroConctacto',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'numeroConctacto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->