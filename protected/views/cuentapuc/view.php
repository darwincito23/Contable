<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentapucs'=>array('index'),
	$model->idCuentaPuc,
);

$this->menu=array(
	array('label'=>'Lista de Cuentas PUC', 'url'=>array('index')),
	array('label'=>'Crear Cuenta PUC', 'url'=>array('create')),
	array('label'=>'Actualizar Cuenta PUC', 'url'=>array('update', 'id'=>$model->idCuentaPuc)),
	array('label'=>'Eliminar Cuenta PUC', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCuentaPuc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Cuenta PUC', 'url'=>array('admin')),
);
?>

<h1>Ver Cuenta PUC Número: <?php echo $model->idCuentaPuc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombreCuentaPuc',
		'codigoCuentaPuc',
		'TipoGasto_idTipoGasto',
		'CuentaPadre',		
	),
)); ?>
