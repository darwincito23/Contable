<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */
/* @var $form CActiveForm */
?>

<form action="" class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cuentapuc-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<script>
	function verify(){
		if( $('.cb').prop('checked') ) {
			<?php echo "si" ?>
    $("cp").disable(false);
}else{
	$("cp").disable(true);
	<?php echo "no" ?>
	}
}
</script>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

		
		<?php echo $form->labelEx($model,'idCuenta'); ?>
		<?php echo $form->textField($model,'idCuenta'); ?>
		<?php echo $form->error($model,'idCuenta'); ?>
	

	<div class="">
	
		<?php echo $form->labelEx($model,'cuentaPadre'); ?>
		
		<?php echo $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
      'model'=>$model,
      'attribute'=>'cuentaPadre',
      'source'=>$model->searchCuentaPadre(),
      // additional javascript options for the autocomplete plugin
      'options'=>array(
          'minLength'=>'1',

 	   ),
 	   'htmlOptions'=>array(
 	       'style'=>'height:20px;',
 	       'id'=>'cp',
 	   ),
 	),true);
 	?>
		<?php  $form->textField($model,'cuentaPadre'); ?>
		<input type="checkbox" id="cb" onclick="return verify()">

		<?php echo $form->error($model,'cuentaPadre'); ?>
	</div>

	

	<div class="">
		<?php echo $form->labelEx($model,'nombreCuenta'); ?>
		<?php echo $form->textField($model,'nombreCuenta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreCuenta'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'codigoCuenta'); ?>
		<?php echo $form->textField($model,'codigoCuenta',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigoCuenta'); ?>
	</div>

	

	<div class="">
		<?php echo $form->labelEx($model,'idTipoGasto'); ?>
		<?php echo $form->textField($model,'idTipoGasto'); ?>
		<?php echo $form->error($model,'idTipoGasto'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'id_registro_contable_gasto'); ?>
		<?php echo $form->textField($model,'id_registro_contable_gasto',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id_registro_contable_gasto'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class=" buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->