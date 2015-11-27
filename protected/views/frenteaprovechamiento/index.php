<?php
/* @var $this FrenteaprovechamientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Frente de aprovechamiento',
);

$this->menu=array(
	array('label'=>'Crear Frente', 'url'=>array('create')),
	array('label'=>'Administrar Frente', 'url'=>array('admin')),
);
?>

<h1>Frenteaprovechamientos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
