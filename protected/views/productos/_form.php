<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idProductos'); ?>
		<?php echo $form->textField($model,'idProductos'); ?>
		<?php echo $form->error($model,'idProductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreProducto'); ?>
		<?php echo $form->textField($model,'nombreProducto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreProducto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costo'); ?>
		<?php echo $form->textField($model,'costo'); ?>
		<?php echo $form->error($model,'costo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idFrente_Aprovechamientos'); ?>
		<?php echo $form->textField($model,'idFrente_Aprovechamientos'); ?>
		<?php echo $form->error($model,'idFrente_Aprovechamientos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->