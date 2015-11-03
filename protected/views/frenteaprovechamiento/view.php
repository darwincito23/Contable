<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'Frenteaprovechamientos'=>array('index'),
	$model->idFrenteAprovechamiento,
);

$this->menu=array(
	array('label'=>'List Frenteaprovechamiento', 'url'=>array('index')),
	array('label'=>'Create Frenteaprovechamiento', 'url'=>array('create')),
	array('label'=>'Update Frenteaprovechamiento', 'url'=>array('update', 'id'=>$model->idFrenteAprovechamiento)),
	array('label'=>'Delete Frenteaprovechamiento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFrenteAprovechamiento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Frenteaprovechamiento', 'url'=>array('admin')),
);
?>

<h1>View Frenteaprovechamiento #<?php echo $model->idFrenteAprovechamiento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idFrenteAprovechamiento',
		'nombreFrenteAprovechamiento',
		'Usuario_idUsuario',
	),
)); ?>
