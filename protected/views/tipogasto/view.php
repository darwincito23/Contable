<?php
/* @var $this TipogastoController */
/* @var $model Tipogasto */

$this->breadcrumbs=array(
	'Tipogastos'=>array('index'),
	$model->idTipoGasto,
);

$this->menu=array(
	array('label'=>'List Tipogasto', 'url'=>array('index')),
	array('label'=>'Create Tipogasto', 'url'=>array('create')),
	array('label'=>'Update Tipogasto', 'url'=>array('update', 'id'=>$model->idTipoGasto)),
	array('label'=>'Delete Tipogasto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoGasto),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipogasto', 'url'=>array('admin')),
);
?>

<h1>View Tipogasto #<?php echo $model->idTipoGasto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoGasto',
		'nombreTipoGasto',
	),
)); ?>
