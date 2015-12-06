<?php
/* @var $this FrenteaprovechamientoProductosController */
/* @var $model FrenteaprovechamientoProductos */
/* @var $form CActiveForm */
//argumentos del breadcrumb que en este caso recibe dos rutas para acceso.
$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),	
	'Administrar FA y Productos'=>array('/frenteaprovechamientoproductos'),
	'Crear FA con Productos',
);

?>
<br>
<br>
<div class="container-fluid">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<div class="panel panel-default">				
			<div class="panel-heading">
			<h2 class="text-center">
				<?php 
					//se crea un objeto criteria de tipo CDbCriteria
					$criteria =new CDbCriteria;
					//Esta sentencia lo que hace es cargar en la variable $criteria el registro idFrenteaprovechamiento
					//que coincida con el id que entra por parámetro así:
					//where idFrenteaprovechamiento= :id(id_FrenteAprovechamiento) donde id es el id del FA que llega
					//por parámetro desde la vista index
					$criteria->condition='idFrenteaprovechamiento=:id';
					//parámetro que es cargado junto con la vista desde el controlador y que llega desde index.
					$criteria->params=array(':id'=>$model->id_FrenteAprovechamiento);
					//carga en la variable $nombre el registro con el id del Frente de aprovechamiento utilizando 
					//la consulta que se hace al modelo mediante el método estático find().
					$nombre=Frenteaprovechamiento::model()->find($criteria);
					//imprime el nomnre del FA asociado a la id encontrada.
					echo $nombre->nombreFrenteAprovechamiento; 
				?>
			</h2>				  
			</div>
			<div class="panel-body">
				
				<?php $form=$this->beginWidget('CActiveForm', 
					array(
							'id'=>'frenteaprovechamiento-productos-create-form',
							'enableAjaxValidation'=>false,
						)); 
				?>			
							<!--Formulario-->
							<div class=" form">			
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-10">
										<div class="panel panel-default">	
											<div class="panel-body">	
											<h4 class="h4negra text-center">Administrar</h4>		
												<?php $this->widget('zii.widgets.grid.CGridView', array(
													'id'=>'frenteaprovechamientoproductos-grid',
													'dataProvider'=>$model->searchId($model->id_FrenteAprovechamiento),
													'summaryText' => "Mostrando {start} - {end} de {count} resultados", 
													//widget de yii para cambiar el aspecto y textos de la paginación.
													'pager'=>array('htmlOptions'=>array('class'=>'pagination'),
														'header' => '', 'firstPageLabel' => '<< Primer Página', 'prevPageLabel' => 'Anterior', 
														'nextPageLabel' => 'Siguiente', 'lastPageLabel' => 'Ultima Página >>'),
													'filter'=>$model,
													'columns'=>array(					
																	array(
																		'name'=>'nombre',
																		'value'=>'$data->productosIdProductos->nombreProducto',
																		'header'=>'Producto',
																		),
																	array(
																		'name'=>'costo',
																		'value'=>'$data->CostoUnitario',
																		'header'=>'Costo unitario',
																		),
																	
																	array(
																		'class'=>'CButtonColumn',
																		//'template'=>'{view}{delete}{update}',
																		'template'=>'{delete}{update}',
																		'deleteConfirmation'=>"js:'Registro >>>'+$(this).parent().parent().children(':first-child').text()+' <<< será borrado! Continuar?'",
																		'buttons'=>array
																	    (	//cambiar etiquetas de los botones
																	        'delete' => array
																	        (
																	            'label'=>'eliminar',							            
																	        ),
																	        'update' => array
																	        (
																	            'label'=>'actualizar',							            
																	        ),													        

																	    ),
																	),
																),
															)); 
												?>
											</div>
										</div>
									</div>
									<div class="col-md-1"></div>
								</div>

								<div class="row">						
									<div class="col-md-1"></div>
									<div class="row col-md-10 text-center">
											<?php //echo $form->errorSummary($model); ?>
											<div class="row">
												<div class="panel panel-default">
													<div class="panel-body">
														<h4 class="h4negra">Ingresar Producto</h4>
														<div class="col-md-3"></div>
														<div class="col-md-3">							  
														  		<div class="row">
																	<?php echo $form->labelEx($model,'Producto'); ?>
																</div><!--end row-->
																<div class="row">
																	<?php echo $form->dropDownList($model,'Productos_idProductos',$model->getListProductos()); ?>
																	<?php echo $form->error($model,'Productos_idProductos'); ?>
																</div><!--end row-->									
														</div>
														<div class="col-md-3">
															<div class="row">
																<?php echo $form->labelEx($model,'CostoUnitario'); ?>
															</div>	
															<div class="row">
																<?php echo $form->textField($model,'CostoUnitario'); ?>
																<?php echo $form->error($model,'CostoUnitario'); ?>
															</div>												
														</div>
														<div class="col-md-3"></div>

														<div class="row buttons">
															<div class="col-md-4"></div>
															<div class="col-md-4">
																<?php echo CHtml::submitButton('Guardar',array('class'=>'btn btn-success btn-md')); ?>
															</div>
															<div class="col-md-4"></div>
														</div>
													</div>
												</div>																		
											</div>	
											
									</div>
									<div class="col-md-1"></div>		
									<?php $this->endWidget(); ?>
								</div><!--end row-->
							</div><!-- formulario -->
		</div><!--end panel-body-->
	</div>
	<div class="col-md-1"></div>
</div>





