<?php
/* @var $this ConsolidadoecpvController */
/* @var $model Consolidadoecpv */

$this->breadcrumbs=array(
	'Consolidadoecpvs'=>array('index'),
	$model->idConsolidado_Estado_Costo_Producto_Vendido,
);

$this->menu=array(
	array('label'=>'List Consolidadoecpv', 'url'=>array('index')),
	array('label'=>'Create Consolidadoecpv', 'url'=>array('create')),
	array('label'=>'Update Consolidadoecpv', 'url'=>array('update', 'id'=>$model->idConsolidado_Estado_Costo_Producto_Vendido)),
	array('label'=>'Delete Consolidadoecpv', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idConsolidado_Estado_Costo_Producto_Vendido),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Consolidadoecpv', 'url'=>array('admin')),
);
?>

<h1>View Consolidadoecpv #<?php echo $model->idConsolidado_Estado_Costo_Producto_Vendido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idConsolidado_Estado_Costo_Producto_Vendido',
		'fecha_inicio',
		'fecha_fin',
		'TotalCostoFA',
		'Total_Cantidad_Producto',
		'Total_Costo_Producto',
		'Costo_Producto_Vendido_Final',
		'Registro_ECPV_idRegistro_ECPV',
	),
)); ?>
