<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model,'Por favor soluciones los siguientes errores: '); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreUsuario'); ?>
		<?php echo $form->textField($model,'nombreUsuario',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->labelEx($model,'numeroContacto'); ?>
		<?php echo $form->textField($model,'numeroContacto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'numeroContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contrasena'); ?>
		<?php echo $form->textField($model,'contrasena',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'contrasena'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->