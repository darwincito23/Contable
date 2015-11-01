<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'Frenteaprovechamientos'=>array('index'),
	$model->idfrenteAprovechamiento=>array('view','id'=>$model->idfrenteAprovechamiento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Frenteaprovechamiento', 'url'=>array('index')),
	array('label'=>'Create Frenteaprovechamiento', 'url'=>array('create')),
	array('label'=>'View Frenteaprovechamiento', 'url'=>array('view', 'id'=>$model->idfrenteAprovechamiento)),
	array('label'=>'Manage Frenteaprovechamiento', 'url'=>array('admin')),
);
?>

<h1>Update Frenteaprovechamiento <?php echo $model->idfrenteAprovechamiento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>