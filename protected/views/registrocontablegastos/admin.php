<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastos'=>array('index'),
	'Administrar',
);

<<<<<<< HEAD
$this->menu=array(	
	array('label'=>'Crear Registro contable de gastos', 'url'=>array('create')),
);
=======
<div class="container">
	
	<div class="row">
		<?php 
		$this->menu=array(	
		array('label'=>'Crear Registro contable de gastos', 'url'=>array('create'))		
		);
		?>
	</div>
>>>>>>> parent of 5e93c15... Versión 1.6.2

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registrocontablegastos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Registro contable de gastos</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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
