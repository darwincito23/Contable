<?php
/* @var $this TipogastoController */
/* @var $model Tipogasto */

$this->breadcrumbs=array(
	'Tipogastos'=>array('index'),
	$model->idTipoGasto=>array('view','id'=>$model->idTipoGasto),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipogasto', 'url'=>array('index')),
	array('label'=>'Create Tipogasto', 'url'=>array('create')),
	array('label'=>'View Tipogasto', 'url'=>array('view', 'id'=>$model->idTipoGasto)),
	array('label'=>'Manage Tipogasto', 'url'=>array('admin')),
);
?>

<h1>Update Tipogasto <?php echo $model->idTipoGasto; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>