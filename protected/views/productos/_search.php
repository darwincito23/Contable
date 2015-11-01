<?php
/* @var $this ProductosController */
/* @var $model Productos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idProductos'); ?>
		<?php echo $form->textField($model,'idProductos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreProducto'); ?>
		<?php echo $form->textField($model,'nombreProducto',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'costo'); ?>
		<?php echo $form->textField($model,'costo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idFrente_Aprovechamientos'); ?>
		<?php echo $form->textField($model,'idFrente_Aprovechamientos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->