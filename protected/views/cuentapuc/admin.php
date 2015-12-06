<?php
	/* @var $this CuentapucController */
	/* @var $model Cuentapuc */

	$this->breadcrumbs=array(
	'Administrar Cuentas PUC',
	);

	$this->menu=array(
		array('label'=>'Lista Cuenta PUC', 'url'=>array('index')),
		array('label'=>'Crear Cuenta PUC', 'url'=>array('create')),
	);
?>
<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<br>
<br>
<div class="container-fluid">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="panel panel-default">				
			<div class="panel-heading">
				<h4 class="text-center">Administrar Cuenta PUC</h4>				  
			</div>
			<div class="panel-body">

				<!--CGridView: Muestra una lista de elementos de datos en terminos de la tabla-->
				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'cuentapuc-grid',	
					//cambia el texto de Display por el que sigue a continuación
					'summaryText' => "Mostrando {start} - {end} de {count} resultados", 
					//widget de yii para cambiar el aspecto y textos de la paginación.
					'pager'=>array('htmlOptions'=>array('class'=>'pagination'),
						'header' => '', 'firstPageLabel' => '<< Primer Página', 'prevPageLabel' => 'Anterior', 
						'nextPageLabel' => 'Siguiente', 'lastPageLabel' => 'Ultima Página >>'),
					//proveedor de datos: el método search() del modelo Cuentapuc
					'dataProvider'=>$model->search(),
					//instancia del modelo que filtra los datos entrados por el usuario
					'filter'=>$model,
					//Columnas del grid: Cada elemento de array representa la configuración para una columna en particular del grid
					//que puede ser una cadena o un array.
					'columns'=>array(		
						array(
							//campo: Nombre del atributo del modelo de datos. Se utiliza para la comluna de ordenamiento
							//filtrado y para poner el correspondiente valor del atributo en cada celda de datos.
							//si el valor es especificado se usará este en la celda de datos en lugar del valor del atributo.					
							'name'=>'nombreCuentaPuc',
							//Una Expresión PHP que será evaluada por cada celda de datos usando una expresion de evaluacion y cuyo
							//resultado sera presentado como el contenido de la celda de datos.
							//$data: los datos del modelo para la fila. en este caso del modelo Cuentapuc se trae el nombre de la cuenta PUC
							//'value'=>'$data->nombreCuentaPuc',
							'filter'=>$model->getListCuentaPucNombre('nombre'),
							),
						array(
							//campo
							'name'=>'codigoCuentaPuc',
							//'value'=>'$data->codigoCuentaPuc',
							'filter'=>$model->getListCuentaPucCodigo('codigo'),
							),
						array(
							//campo
							'name'=>'TipoGasto_idTipoGasto',
							//$data: trae desde el modelo Cuentapuc el tipoGastoIdTipoGasto y a través de este se trae el nombre del 
							//tipo de gasto desde el modelo TipoGasto.
							'value'=>'$data->tipoGastoIdTipoGasto->nombreTipoGasto',
							'filter'=>$model->getTipoGasto(),
							'header'=>'Tipo de Gasto',
							),
						//array(
						//	'name'=>'CuentaPadre',
						//	'value'=>'$data->cuentaPadre!=null?$data->cuentaPadre->nombreCuentaPuc:null',
						//	'filter'=>'CuentaPadre',
						//	),	
							//'TipoGasto_idTipoGasto',
							//'CuentaPadre',	
						array(
								'class'=>'CButtonColumn',
								//cambiar el mensaje se advertencia para la eliminación de registros
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
							        'view' => array
							        (
							            'label'=>'ver',							            
							        ),

							    ),
							),
					),
					)); 
				?>
			</div>
		</div>

	</div>
	<div class="col-md-2"></div>
</div>
