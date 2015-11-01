<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedor'=>array('index'),
	'Administar',
);

$this->menu=array(
	array('label'=>'Ingresar nuevo', 'url'=>array('create')),
	array('label'=>'Regresar', 'url'=>array('create')),
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

<h1>Administrar Proveedores</h1>

<p>
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proveedor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idProveedor',
		'nombreProveedor',
		'codigoProveedor',
		'numeroContacto',
		'direccion',
		'nit_cc',
		/*
		'idUsuario',
		'id_registro_contable_gastos',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
