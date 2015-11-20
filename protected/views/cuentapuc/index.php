<?php
/* @var $this CuentapucController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cuenta Puc',
);

$this->menu=array(
	array('label'=>'Crear Cuenta PUC', 'url'=>array('create')),
	array('label'=>'Administrar Cuenta PUC', 'url'=>array('admin')),
);
?>

<h1>Cuenta PUC</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
