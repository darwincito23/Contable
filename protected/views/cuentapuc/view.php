<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentapucs'=>array('index'),
	$model->idCuentaPuc,
);

$this->menu=array(
	array('label'=>'List Cuentapuc', 'url'=>array('index')),
	array('label'=>'Create Cuentapuc', 'url'=>array('create')),
	array('label'=>'Update Cuentapuc', 'url'=>array('update', 'id'=>$model->idCuentaPuc)),
	array('label'=>'Delete Cuentapuc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCuentaPuc),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cuentapuc', 'url'=>array('admin')),
);
?>

<h1>View Cuentapuc #<?php echo $model->idCuentaPuc; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCuentaPuc',
		'nombreCuentaPuc',
		'codigoCuentaPuc',
		'TipoGasto_idTipoGasto',
		'CuentaPadre',
		'Usuario_idUsuario',
	),
)); ?>
