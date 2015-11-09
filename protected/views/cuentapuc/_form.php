<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */
/* @var $form CActiveForm */
?>

.

<div class="form text-center">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cuentapuc-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'CuentaPadre'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
          								array(
           								  	'model'=>$model,
      										'attribute'=>'CuentaPadre',
           								  	'source'=>$model->obtenerCodigoNombre(), //match case when performing a lookup?	
 											'options'=>array(
        								  					'minLength'=>'1',
         								 					'select'=>'js:function( event, ui ) {
          								  					var valor=ui.item.value;
          								  					var sp=valor.split("<->");
          								  					$("#codigoc").val(sp[0]);                
          								  					return true;  
       								 						}',
 	   													),
            								 'htmlOptions'=>array('size'=>'40'), 
            								 ));?>
		<?php echo $form->error($model,'CuentaPadre'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'prefijo'); ?>
		<?php echo $form->textField($model,'prefijo',array('size'=>15,'readonly'=>true,'maxlength'=>20,'id'=>'codigoc')); ?>
		
		<?php echo $form->labelEx($model,'nombreCuentaPuc'); ?>
		<?php echo $form->textField($model,'nombreCuentaPuc',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombreCuentaPuc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoCuentaPuc'); ?>
		<?php echo $form->textField($model,'codigoCuentaPuc',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'codigoCuentaPuc'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'TipoGasto_idTipoGasto'); ?>
		<?php echo $form->dropDownList($model,'TipoGasto_idTipoGasto',$model->getTipoGasto(),array()); ?>
		<?php echo $form->error($model,'TipoGasto_idTipoGasto'); ?>
	</div>

	
	<!--
	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario',array('size'=>45,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Usuario_idUsuario'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-success btn-md ')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->