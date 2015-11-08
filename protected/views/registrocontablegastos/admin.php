<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */
	$this->breadcrumbs=array(
	'Registrocontablegastos'=>array('index'),
	'Administrar',
);
?>

<?php
	$this->menu=array(	
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Ver Registro', 'url'=>array('index')),
	);	
?>
<h1>Administrar Registro contable de gastos</h1>

<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registrocontablegastos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		array(
			'name'=>'ccuenta',
			'value'=>'$data->cuentaPucIdCuentaPuc->codigoCuentaPuc',
			'filter'=>$model->getListCuentaPuc('codigo'),
			'header'=>'Codigo cuenta',
			),
		
		array(
			'name'=>'CuentaPuc_idCuentaPuc',
			'value'=>'$data->cuentaPucIdCuentaPuc->nombreCuentaPuc',
			'filter'=>$model->getListCuentaPuc('nombre'),
			'header'=>'Nombre cuenta',
			),
		
		array(
			'name'=>'cprovedor',
			'header'=>'Codigo Proveedor',
			'value'=>'$data->proveedorIdProveedor->codigoProveedor',
			'filter'=>$model->getListProveedor('codigo'),
		),

		array(
			'name'=>'Proveedor_idProveedor',
			'value'=>'$data->proveedorIdProveedor->nombreProveedor',
			'filter'=>$model->getListProveedor('nombre'),
			'header'=>'Nombre Proveedor',
			),		
		
		'fecha',	
		'valorRegistroContable',
		'descripcion',
		
		
		
		/*
		'CuentaPuc_idCuentaPuc',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>