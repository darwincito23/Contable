<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idfrenteAprovechamiento'); ?>
		<?php echo $form->textField($model,'idfrenteAprovechamiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreFrenteAprovechamiento'); ?>
		<?php echo $form->textField($model,'nombreFrenteAprovechamiento',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idProductos'); ?>
		<?php echo $form->textField($model,'idProductos'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->