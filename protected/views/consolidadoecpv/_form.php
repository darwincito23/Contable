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

	<?php echo $form->errorSummary($model); ?>

	<div class="row">

		<div class="col-md-3"></div>
		<div class="col-md-3">
			<?php echo $form->labelEx($model,'fecha_inicio'); ?>		
			<?php echo $form->error($model,'fecha_inicio'); ?>
			<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker',array(
								      'model'=>$model,
								      'attribute'=>'fecha_inicio',
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
		<div class="col-md-3">
			<?php echo $form->labelEx($model,'fecha_fin'); ?>			
			<?php echo $form->error($model,'fecha_fin'); ?>			
			<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker',array(
								      'model'=>$model,
								      'attribute'=>'fecha_fin',
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
		<div class="col-md-3"></div>

	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
					<h4 class="text-center">Productos</h4>				  
		</div>
		<div class="panel-body">
			<div class="row">

				<div class="row">

					<div class="col-md-3"></div>
					<div class="col-md-3">
						<p>Espacio para Producto</p>
					</div>
					<div class="col-md-3">
						<p>Espacio para FA</p>
					</div>
					<div class="col-md-3"></div>

				</div>

				<div class="row">
					<p>Espacio para CGRID</p>
				</div><!-- end cgrid-->
				<div class="row">

					<div class="col-md-2"></div>
					<div class="col-md-4">
						<?php echo $form->labelEx($model,'Total_Cantidad_Producto'); ?>
						<?php echo $form->textField($model,'Total_Cantidad_Producto',array('size'=>20,'maxlength'=>45)); ?>
						<?php echo $form->error($model,'Total_Cantidad_Producto'); ?>
					</div>
					<div class="col-md-4">
						<?php echo $form->labelEx($model,'Total_Costo_Producto'); ?>
						<?php echo $form->textField($model,'Total_Costo_Producto',array('size'=>20,'maxlength'=>45)); ?>
						<?php echo $form->error($model,'Total_Costo_Producto'); ?>
					</div>
					<div class="col-md-2"></div>						
				</div>			
			</div>
		</div><!--end panelbody-->		
	</div>	

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="text-center">Frentes de Aprovechamiento</h4>				  
		</div>

		<div class="panel-body">
			<div class="row">
					<p>Espacio para CGRID</p>
			</div><!-- end cgrid-->
			<div class="row">
				<?php echo $form->labelEx($model,'TotalCostoFA'); ?>
				<?php echo $form->textField($model,'TotalCostoFA',array('size'=>45,'maxlength'=>45)); ?>
				<?php echo $form->error($model,'TotalCostoFA'); ?>
			</div>
		</div><!--end panelbody-->
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'Costo_Producto_Vendido_Final'); ?>
		<?php //echo $form->textField($model,'Costo_Producto_Vendido_Final',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'Costo_Producto_Vendido_Final'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'Registro_ECPV_idRegistro_ECPV'); ?>
		<?php //echo $form->textField($model,'Registro_ECPV_idRegistro_ECPV'); ?>
		<?php //echo $form->error($model,'Registro_ECPV_idRegistro_ECPV'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save',array('class'=>'btn btn-success btn-md')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->