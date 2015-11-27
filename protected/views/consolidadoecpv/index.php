<?php
/* @var $this ConsolidadoecpvController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Consolidadoecpvs',
);

$this->menu=array(
	array('label'=>'Create Consolidadoecpv', 'url'=>array('create')),
	array('label'=>'Manage Consolidadoecpv', 'url'=>array('admin')),
);
?>

<h1>Consolidado ECPV</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
