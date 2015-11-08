<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentapucs'=>array('index'),
	$model->idCuentaPuc,
);

$this->menu=array(
	array('label'=>'Lista de Cuentas Puc', 'url'=>array('index')),
	array('label'=>'Crear Cuenta Puc', 'url'=>array('create')),
	array('label'=>'Actualizar Cuenta Puc', 'url'=>array('update', 'id'=>$model->idCuentaPuc)),
	array('label'=>'Eliminar Cuenta Puc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCuentaPuc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Cuenta Puc', 'url'=>array('admin')),
);
?>

<h1>Ver Cuenta Puc Número: <?php echo $model->idCuentaPuc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombreCuentaPuc',
		'codigoCuentaPuc',
		'TipoGasto_idTipoGasto',
		'CuentaPadre',		
	),
)); ?>
