<?php
/* @var $this RegistroEcpvController */
/* @var $model RegistroEcpv */
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	'Registroecpv'=>array('index'),
	'Crear',
);
?>

<div class="container-fluid text-center">
	
	<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registro-ecpv-crear-form',
	'enableAjaxValidation'=>false,
	)); ?>

		<div class="form">			

			<?php //echo $form->errorSummary($model); ?>

			<div class="row">
				<h1>Sitio donde va el Nombre del FA</h1>
				<?php //echo $form->labelEx($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'); ?>
				<?php //echo $form->textField($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'); ?>
				<?php //echo $form->error($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'fecha'); ?>
				<?php //echo $form->textField($model,'fecha'); ?>
				<?php echo $form->error($model,'fecha'); ?>
				<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker',array(
								      'model'=>$model,
								      'attribute'=>'fecha',
								      // additional javascript options for the date picker plugin
								      'options'=>array(
								          'showAnim'=>'fold',
								          'dateFormat' => 'yy-mm-dd'
								      ),
								      'htmlOptions'=>array(
								          'style'=>'height:20px;',
								          'id'=>'fecha_i'
								      ),
								  ),true);
								?>
			</div>

			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<p>Aca va el Cgrid</p>	
				</div>
				<div class="col-md-2"></div>
			</div><!--end row-->

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-2">
					<?php echo $form->labelEx($model,'_idProductos'); ?>
					<?php echo $form->textField($model,'FrenteAprovechamiento_Productos_Productos_idProductos'); ?>
					<?php echo $form->error($model,'FrenteAprovechamiento_Productos_Productos_idProductos'); ?>
				</div>
				<div class="col-md-2">
					<?php echo $form->labelEx($model,'cantidad'); ?>
					<?php echo $form->textField($model,'cantidad'); ?>
					<?php echo $form->error($model,'cantidad'); ?>
				</div>	
				<div class="col-md-4"></div>			
			</div>

			<!--<div class="row">
				<?php echo $form->labelEx($model,'CostoTotalUnitario'); ?>
				<?php echo $form->textField($model,'CostoTotalUnitario'); ?>
				<?php echo $form->error($model,'CostoTotalUnitario'); ?>
			</div>-->			

			<?php $this->endWidget(); ?>

		</div><!-- form -->
			<div class="row buttons">
				<?php echo CHtml::submitButton('Guardar',array('class'=>'btn btn-success btn-md')); ?>
			</div>
</div>

