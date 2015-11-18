<?php
/* @var $this ConsolidadoecpvController */
/* @var $model Consolidadoecpv */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'consolidadoecpv-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio'); ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<?php echo $form->textField($model,'fecha_fin'); ?>
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TotalCostoFA'); ?>
		<?php echo $form->textField($model,'TotalCostoFA',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TotalCostoFA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Total_Cantidad_Producto'); ?>
		<?php echo $form->textField($model,'Total_Cantidad_Producto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Total_Cantidad_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Total_Costo_Producto'); ?>
		<?php echo $form->textField($model,'Total_Costo_Producto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Total_Costo_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Costo_Producto_Vendido_Final'); ?>
		<?php echo $form->textField($model,'Costo_Producto_Vendido_Final',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Costo_Producto_Vendido_Final'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Registro_ECPV_idRegistro_ECPV'); ?>
		<?php echo $form->textField($model,'Registro_ECPV_idRegistro_ECPV'); ?>
		<?php echo $form->error($model,'Registro_ECPV_idRegistro_ECPV'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->