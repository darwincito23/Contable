<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'Frenteaprovechamientos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Frenteaprovechamiento', 'url'=>array('index')),
	array('label'=>'Manage Frenteaprovechamiento', 'url'=>array('admin')),
);
?>

<h1>Create Frenteaprovechamiento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>