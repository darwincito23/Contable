<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'Frenteaprovechamientos'=>array('index'),
	$model->idfrenteAprovechamiento,
);

$this->menu=array(
	array('label'=>'List Frenteaprovechamiento', 'url'=>array('index')),
	array('label'=>'Create Frenteaprovechamiento', 'url'=>array('create')),
	array('label'=>'Update Frenteaprovechamiento', 'url'=>array('update', 'id'=>$model->idfrenteAprovechamiento)),
	array('label'=>'Delete Frenteaprovechamiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idfrenteAprovechamiento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Frenteaprovechamiento', 'url'=>array('admin')),
);
?>

<h1>View Frenteaprovechamiento #<?php echo $model->idfrenteAprovechamiento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idfrenteAprovechamiento',
		'nombreFrenteAprovechamiento',
		'idUsuario',
		'idProductos',
	),
)); ?>
