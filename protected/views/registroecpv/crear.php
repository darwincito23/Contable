<?php
/* @var $this RegistroEcpvController */
/* @var $model RegistroEcpv */
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),
	'Registro ECPV Selección FA'=>array('index'),	
	'Crear Registro ECPV',
);
?>
<br>
<br>
<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-default">				
			<div class="panel-heading">
			<h4 class="text-center">
				<?php $criteria =new CDbCriteria;
				$criteria->condition='idFrenteaprovechamiento=:id';
				$criteria->params=array(':id'=>$model->frenteA);
				  $nombre=Frenteaprovechamiento::model()->find($criteria);
				  echo $nombre->nombreFrenteAprovechamiento; 
				?>
			</h4>				  
			</div>

			<div class="panel-body text-center">				
				<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'registro-ecpv-crear-form',
				'enableAjaxValidation'=>false,
				)); ?>
					<!--form-->
					<div class="form">				
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<div class="panel panel-default">					
									<div class="panel-body text-center">
										<h4 class="h4negra">Resumen Administrativo</h4>
										<div class="row">	

											<?php $this->widget('zii.widgets.grid.CGridView', array(
												'id'=>'frenteaprovechamientoproductos-grid',
												//proveedor de datos: el método searchId() del modelo Registro ECPV
												'dataProvider'=>$model->searchId($model->frenteA),
												//instancia del modelo que filtra los datos entrados por el usuario
												//'filter'=>$model,
												//Columnas del grid: Cada elemento de array representa la configuración para una columna en particular del grid
												//que puede ser una cadena o un array.
												'columns'=>array(
													array(
														//campo: Nombre del atributo del modelo de datos. Se utiliza para la comluna de ordenamiento
														//filtrado y para poner el correspondiente valor del atributo en cada celda de datos.
														//si el valor es especificado se usará este en la celda de datos en lugar del valor del atributo.  
														'name'=>'date',
														//Una Expresión PHP que será evaluada por cada celda de datos usando una expresion de evaluacion y cuyo
														//resultado sea presentado como el contenido de la celda de datos.
														//$data: los datos del modelo para la fila.
														'value'=>'$data->fecha',
														//encabezado
														'header'=>'Fecha',
														),
													array(
														'name'=>'nombrep',
														//
														'value'=>'$data->getProductoN($data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->Productos_idProductos)',
														'header'=>'Producto',
														),
													array(
														//'name'=>'costop',
														'value'=>'$data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->CostoUnitario',
														'header'=>'Costo unitario',
														'htmlOptions'=>array('class'=>'text-center'),	
														),
													array(
														'name'=>'cantidad',
														'value'=>'$data->cantidad',
														'header'=>'Cantidad',
														'htmlOptions'=>array('class'=>'text-center'),												
														),
													array(
														'name'=>'costopp',
														'value'=>'($data->cantidad)*($data->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->CostoUnitario)',
														'header'=>'Costo total unitario',
														'htmlOptions'=>array('class'=>'text-center'),
														),
													
													array(
														'class'=>'CButtonColumn',
														'template'=>'{delete}{update}',
													)
												),
											)); ?>
										</div>									
								
										<div class="row">
											<?php echo $form->labelEx($model,'Costo Parcial'); ?>
											<?php echo $form->textField($model,'costoParcial',array('class'=>'text-center')); ?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div><!--end row-->
						<div class="col-md-1"></div>
						<div class="col-md-10">
						<div class="panel panel-default">					
							<div class="panel-body text-center">						
									<h4 class="h4negra">Crear Registro ECPV</h4>
									<div class="row">
										<?php echo $form->errorSummary($model,'Por favor solucione los siguientes errores:'); ?>
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
											<div class="col-md-3"></div>
											<div class="col-md-3">
												<?php echo $form->labelEx($model,'Productos'); ?>
												<?php echo $form->dropDownList($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA',$model->getListFap($model->frenteA)); ?>
												<?php echo $form->error($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'); ?>
											</div>
											<div class="col-md-3">
												<?php echo $form->labelEx($model,'cantidad'); ?>
												<?php echo $form->textField($model,'cantidad'); ?>
												<?php echo $form->error($model,'cantidad'); ?>
											</div>	
											<div class="col-md-3"></div>			
										</div>
									</div><!--endrow-->
									<div class="row buttons">
										<?php echo CHtml::submitButton('Guardar',array('class'=>'btn btn-success btn-md')); ?>
									</div>
								</div>							
							</div>
						</div>							
						</div>
						<div class="col-md-1"></div>
					</div><!-- form -->						
			</div><!--end panel.body-->
			<?php $this->endWidget(); ?>				
		</div><!--end panel-default-->
	</div>
	<div class="col-md-1"></div>
</div>
		
