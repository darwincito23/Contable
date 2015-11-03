<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'Frenteaprovechamientos'=>array('index'),
	$model->idFrenteAprovechamiento=>array('view','id'=>$model->idFrenteAprovechamiento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Frenteaprovechamiento', 'url'=>array('index')),
	array('label'=>'Create Frenteaprovechamiento', 'url'=>array('create')),
	array('label'=>'View Frenteaprovechamiento', 'url'=>array('view', 'id'=>$model->idFrenteAprovechamiento)),
	array('label'=>'Manage Frenteaprovechamiento', 'url'=>array('admin')),
);
?>

<h1>Update Frenteaprovechamiento <?php echo $model->idFrenteAprovechamiento; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>