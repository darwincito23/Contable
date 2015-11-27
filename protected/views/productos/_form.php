<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreProducto'); ?>
		<?php echo $form->textField($model,'nombreProducto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreProducto'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario'); ?>
		<?php echo $form->error($model,'Usuario_idUsuario'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Save',array('class'=>'btn btn-success btn-md')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->