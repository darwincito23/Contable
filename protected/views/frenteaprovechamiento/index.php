<?php
/* @var $this FrenteaprovechamientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Frenteaprovechamientos',
);

$this->menu=array(
	array('label'=>'Create Frenteaprovechamiento', 'url'=>array('create')),
	array('label'=>'Manage Frenteaprovechamiento', 'url'=>array('admin')),
);
?>

<h1>Frenteaprovechamientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
