<?php
/* @var $this ConsolidadoecpvController */
/* @var $model Consolidadoecpv */

$this->breadcrumbs=array(
	'Consolidadoecpvs'=>array('index'),
	$model->idConsolidado_Estado_Costo_Producto_Vendido=>array('view','id'=>$model->idConsolidado_Estado_Costo_Producto_Vendido),
	'Update',
);

$this->menu=array(
	array('label'=>'List Consolidadoecpv', 'url'=>array('index')),
	array('label'=>'Create Consolidadoecpv', 'url'=>array('create')),
	array('label'=>'View Consolidadoecpv', 'url'=>array('view', 'id'=>$model->idConsolidado_Estado_Costo_Producto_Vendido)),
	array('label'=>'Manage Consolidadoecpv', 'url'=>array('admin')),
);
?>

<h1>Update Consolidadoecpv <?php echo $model->idConsolidado_Estado_Costo_Producto_Vendido; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>