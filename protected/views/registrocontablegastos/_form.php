<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registrocontablegastos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="">
		<?php echo $form->labelEx($model,'fecha'); ?>
	

<?php  $this->widget('zii.widgets.jui.CJuiDatePicker',array(
      'model'=>$model,
      'attribute'=>'fecha',
      // additional javascript options for the date picker plugin
      'options'=>array(
          'showAnim'=>'fold',
      ),
      'htmlOptions'=>array(
          'style'=>'height:20px;'
      ),
  ),true);
?>



		<?php  echo $form->textField($model,'fecha');?>
   		

		

		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'idRegistroContableGastos'); ?>
		<?php echo $form->textField($model,'idRegistroContableGastos'); ?>
		<?php echo $form->error($model,'idRegistroContableGastos'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'valorRegistroContable'); ?>
		<?php echo $form->textField($model,'valorRegistroContable'); ?>
		<?php echo $form->error($model,'valorRegistroContable'); ?>
	</div>

	<div class="">
		<?php  $form->labelEx($model,'idRegistroContableGastos'); ?>
		<?php  $form->textField($model,'idRegistroContableGastos',array('size'=>20,'maxlength'=>20)); ?>
		<?php  $form->error($model,'idRegistroContableGastos'); ?>
	</div>

		
		
	<div class="">
		<?php echo $form->labelEx($model,'idCuentaPUC'); ?>
	
	<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
          array(
                         //name of the html field that will be generated
             'model'=>$model,
      		'attribute'=>'idCuentaPUC',
                         //replace controller/action with real ids
             'source'=>$model->sCu(), //match case when performing a lookup?
 				
 				'options'=>array(
          'minLength'=>'1',
          'select'=>'js:function( event, ui ) {
            $("#cuent").val(parseInt(ui.item.value[0]));               
            return true;  
        }',
 	   ),
                         //any additional html attributes that go inside of 
                         //the input field can be defined here
             'htmlOptions'=>array('size'=>'40','onkeyPress'=>'set()','id'=>'vari'), 
 
             //'methodChain'=>".result(function(event,item){\$(\"#idUsuario\").val(item[1]);})",
             ));

    ?>

		<?php echo $form->textField($model,'idCuentaPUC',array('id'=>'cuenta')); ?>
		<?php echo $form->error($model,'idCuentaPUC'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'idProveedor'); ?><?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
          array(
                         //name of the html field that will be generated
             'model'=>$model,
      		'attribute'=>'idProveedor',
                         //replace controller/action with real ids
             'source'=>$model->sProv(), //match case when performing a lookup?
 				
 				'options'=>array(
          'minLength'=>'1',
          'select'=>'js:function( event, ui ) {
            $("#idUser").val(parseInt(ui.item.value[0]));
            $("#prov").val(parseInt(ui.item.value[0]));
            $("#field").val(ui.item.value[1]);                
            return true;  
        }',
 	   ),
                         //any additional html attributes that go inside of 
                         //the input field can be defined here
             'htmlOptions'=>array('size'=>'40','onkeyPress'=>'set()','id'=>'var'), 
 
             //'methodChain'=>".result(function(event,item){\$(\"#idUsuario\").val(item[1]);})",
             ));

    ?>

		<?php echo $form->textField($model,'idProveedor',array('id'=>'prov')); ?>
		<?php echo $form->error($model,'idProveedor'); ?>
	</div>
<?php ?>
<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" sync>
	$.post('/_/ajax/init_session.php', { foo: 'bar' }, function(data) {
  console.log(data);
}, json);
</script>

<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>	

	function set(){		
		var Dato=document.getElementById("varid").getAttribute("value");
		$.ajax({url:"yourphp.php",type:"POST",async:false,data:{val:Dato}});
		document.getElementById("hid").setAttribute("value","<?php// 
			!==null?$model->sett():""?>");
		return true;
	}
	<?php 
//	$.ajax({
//  url: "RegistrocontablegastosController/set",
//}).done(function(data) { 
//  $(#idPuntos).val(data); 
//}); 
	 ?>
</script>

	<div class=""id="usert">
		
		<?php echo $form->labelEx($model,'idUsuario'); ?>
<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
          array(
                         //name of the html field that will be generated
             'model'=>$model,
      		'attribute'=>'idUsuario',
                         //replace controller/action with real ids
             'source'=>$model->scuenta(), //match case when performing a lookup?
 				
 				'options'=>array(
          'minLength'=>'1',
          'select'=>'js:function( event, ui ) {
            $("#idUser").val(parseInt(ui.item.value[0]));
            $("#varid").val(parseInt(ui.item.value[0]));
            $("#field").val(ui.item.value[1]);                
            return true;  
        }',
 	   ),
                         //any additional html attributes that go inside of 
                         //the input field can be defined here
             'htmlOptions'=>array('size'=>'40','onkeyPress'=>'set()','id'=>'varid'), 
 
             //'methodChain'=>".result(function(event,item){\$(\"#idUsuario\").val(item[1]);})",
             ));

    ?>


		<?php echo $form->textField($model,'idUsuario',array('id'=>'idUser')); ?>	
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>
	<div><?php //echo CHtml::ajaxSubmitButton('Buscar',array('RegistrocontablegastosController/Ajaxd'),'htmlOptions'=>array('update'=>'#usert')); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>
	<div class=" buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->