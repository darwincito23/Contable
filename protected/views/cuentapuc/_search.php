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
		<?php echo $form->label($model,'idCuentaPuc'); ?>
		<?php echo $form->textField($model,'idCuentaPuc',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreCuentaPuc'); ?>
		<?php echo $form->textField($model,'nombreCuentaPuc',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'codigoCuentaPuc'); ?>
		<?php echo $form->textField($model,'codigoCuentaPuc',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TipoGasto_idTipoGasto'); ?>
		<?php echo $form->textField($model,'TipoGasto_idTipoGasto',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CuentaPadre'); ?>
		<?php echo $form->textField($model,'CuentaPadre',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->