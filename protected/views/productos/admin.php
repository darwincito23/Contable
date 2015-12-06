<?php
/* @var $this ProductosController */
/* @var $model Productos */

$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),	
	'Adminsitrar FA y Productos'=>array('frenteaprovechamientoproductos/index'),
	'Administrar Productos',
);

$this->menu=array(
	array('label'=>'Lista de Productos', 'url'=>array('index')),
	array('label'=>'Crear Productos', 'url'=>array('create')),
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
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">				
			<div class="panel-heading">
				<h2 class="text-center">Administrar Productos</h2>				  
			</div>	
			<div class="panel-body">
				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'productos-grid',
					'summaryText' => "Mostrando {start} - {end} de {count} resultados", 
					//widget de yii para cambiar el aspecto y textos de la paginación.
					'pager'=>array('htmlOptions'=>array('class'=>'pagination'),
						'header' => '', 'firstPageLabel' => '<< Primer Página', 'prevPageLabel' => 'Anterior', 
						'nextPageLabel' => 'Siguiente', 'lastPageLabel' => 'Ultima Página >>'),
					//proveedor de datos: el método search() del modelo Cuentapuc
					'dataProvider'=>$model->search(),
					'filter'=>$model,
					'columns'=>array(
						'idProductos',
						'nombreProducto',
						//'Usuario_idUsuario',
						array(
							'class'=>'CButtonColumn',
							'deleteConfirmation'=>"js:'Registro >>> '+$(this).parent().parent().children(':first-child').text()+' <<< será borrado! Continuar?'",
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
				)); ?>
			</div>
		</div>
	</div>
	<div class="col-md-3"></div>
</div>