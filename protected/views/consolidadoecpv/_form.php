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
<?php Yii::app()->clientScript->registerScript('search', "
$('#boton').submit(function(){
	$('#consolidadoecpv-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

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
								          'id'=>'fecha_f'
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
						<p><?php echo $form->dropDownList($model,'producto',$model->getListProductos()) ?></p>
					</div>
					<div class="col-md-3">
						<p><?php echo $form->dropDownList($model,'frenteaprovechamiento',$model->getListFrenteA()) ?></p>
					</div>
					<div class="col-md-3"></div>

				</div>

				<div class="row">
					<p><?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'consolidadoecpv-grid',
				'dataProvider'=>$model->searchAll($model->fecha_inicio,
										$model->fecha_fin,
										$model->frenteaprovechamiento,
										$model->producto),
				'columns'=>array(
		
									array(
										'name'=>'fAprovechamiento',
										'value'=>'$data->getFrenteN($data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->id_FrenteAprovechamiento)',
										'header'=>'Frente aprovechamiento',
										),
									array(
										'name'=>'nombreProducto',
										'value'=>'$data->getProductoN($data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->Productos_idProductos)',
										'header'=>'Nombre producto',
										),
									array(
										'name'=>'costoProducto',
										'value'=>'($data->cantidad)*($data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->CostoUnitario)',
										'header'=>'Costo',
										),
									array(
										'name'=>'cantidadProducto',
										'value'=>'$data->cantidad',
										'header'=>'cantidad',
										),
							
								),
				));?></p>
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
					<p><?php $this->widget('zii.widgets.grid.CGridView', array(
				'id'=>'consolidadoecpv2-grid',
				'dataProvider'=>$model->searchAll($model->fecha_inicio,
										$model->fecha_fin,
										$model->frenteaprovechamiento,
										$model->producto),
				'columns'=>array(
		
									array(
										'name'=>'fsAprovechamiento',
										'value'=>'$data->getFrenteN($data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->id_FrenteAprovechamiento)',
										'header'=>'Frente aprovechamiento',
										),
									array(
										'name'=>'costoParcial',
										'value'=>'($data->cantidad)*($data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->CostoUnitario)',
										'header'=>'Costo parcial',
										),
								
									
							
								),
				));?></p>
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
		<?php echo CHtml::submitButton('Buscar',array('class'=>'btn btn-success btn-md','id'=>'boton')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->