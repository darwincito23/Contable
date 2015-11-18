<?php
/* @var $this ConsolidadoecpvController */
/* @var $model Consolidadoecpv */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idConsolidado_Estado_Costo_Producto_Vendido'); ?>
		<?php echo $form->textField($model,'idConsolidado_Estado_Costo_Producto_Vendido',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_fin'); ?>
		<?php echo $form->textField($model,'fecha_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TotalCostoFA'); ?>
		<?php echo $form->textField($model,'TotalCostoFA',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Total_Cantidad_Producto'); ?>
		<?php echo $form->textField($model,'Total_Cantidad_Producto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Total_Costo_Producto'); ?>
		<?php echo $form->textField($model,'Total_Costo_Producto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Costo_Producto_Vendido_Final'); ?>
		<?php echo $form->textField($model,'Costo_Producto_Vendido_Final',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Registro_ECPV_idRegistro_ECPV'); ?>
		<?php echo $form->textField($model,'Registro_ECPV_idRegistro_ECPV'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->