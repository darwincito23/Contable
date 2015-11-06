<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Ver Proveedores', 'url'=>array('index')),
	array('label'=>'Crear Proveedor', 'url'=>array('create')),
);

?>

<h1>Administrar Proveedores</h1>

<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>
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
		'NIT_CC',
		/*
		'Usuario_idUsuario',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
