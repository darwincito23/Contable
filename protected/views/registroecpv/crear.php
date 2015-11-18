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
				<h1><?php $criteria =new CDbCriteria;
			$criteria->condition='idFrenteaprovechamiento=:id';
			$criteria->params=array(':id'=>$model->frenteA);
			  $nombre=Frenteaprovechamiento::model()->find($criteria);
			  echo $nombre->nombreFrenteAprovechamiento; 
			?>

			</h1>
				<?php //echo $form->labelEx($model,'frenteA'); ?>
				<?php //echo $form->textField($model,'frenteA'); ?>
				<?php //echo $form->error($model,'frenteA'); ?>
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
					<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'frenteaprovechamientoproductos-grid',
	'dataProvider'=>$model->searchId($model->frenteA),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'date',
			'value'=>'$data->fecha',
			'header'=>'Producto',
			),
		array(
			'name'=>'nombrep',
			'value'=>'$data->getProductoN($data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->Productos_idProductos)',
			'header'=>'Producto',
			),
		array(
			'name'=>'costop',
			'value'=>'$data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->CostoUnitario',
			'header'=>'Costo unitario',
			),
		array(
			'name'=>'cantidad',
			'value'=>'$data->cantidad',
			'header'=>'Cantidad',
			),
		array(
			'name'=>'costopp',
			'value'=>'($data->cantidad)*($data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->CostoUnitario)',
			'header'=>'Costo total unitario',
			),
		
		array(
			'class'=>'CButtonColumn',
		)
	),
)); ?>
				</div>
				<div class="col-md-2"></div>
			</div><!--end row-->
			<div class="row">
				<?php echo $form->labelEx($model,'Costo Parcial'); ?>
				<?php echo $form->textField($model,'costoParcial'); ?>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-2">
					<?php echo $form->labelEx($model,'Productos'); ?>
					<?php echo $form->dropDownList($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA',$model->getListFap($model->frenteA)); ?>
					<?php echo $form->error($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'); ?>
				</div>
				<div class="col-md-2">
					<?php echo $form->labelEx($model,'cantidad'); ?>
					<?php echo $form->textField($model,'cantidad'); ?>
					<?php echo $form->error($model,'cantidad'); ?>
				</div>	
				<div class="col-md-4"></div>			
			</div>			
			

		</div><!-- form -->
			<div class="row buttons">
				<?php echo CHtml::submitButton('Guardar',array('class'=>'btn btn-success btn-md')); ?>
			</div>
</div>
<?php $this->endWidget(); ?>
				<?php //echo $form->labelEx($model,'CostoTotalUnitario'); ?>
				<?php //echo $form->textField($model,'CostoTotalUnitario'); ?>
				<?php //echo $form->error($model,'CostoTotalUnitario'); ?>




<div class="row">
		
	</div>