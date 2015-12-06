<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(	
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Tercero', 'url'=>array('index')),
	array('label'=>'Crear Tercero', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#proveedor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<br>
<br>

<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="container-fluid">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="panel panel-default">				
			<div class="panel-heading">
					<h4 class="text-center">Administrar Terceros</h4>				  
			</div>
			<div class="panel-body">
				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'id'=>'proveedor-grid',
					'dataProvider'=>$model->search(),
					'summaryText' => "Mostrando {start} - {end} de {count} resultados", 
					//widget de yii para cambiar el aspecto y textos de la paginación.
					'pager'=>array('htmlOptions'=>array('class'=>'pagination'),
						'header' => '', 'firstPageLabel' => '<< Primer Página', 'prevPageLabel' => 'Anterior', 
						'nextPageLabel' => 'Siguiente', 'lastPageLabel' => 'Ultima Página >>'),
					'filter'=>$model,
					'columns'=>array(
						//'idProveedor',
						'nombreProveedor',
						'codigoProveedor',
						'numeroContacto',
						'direccion',
						'NIT_CC',
						/*
						'Usuario_idUsuario',
						*/
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
				)); ?>
				</div>
		</div>

	</div>
	<div class="col-md-2"></div>
</div>
