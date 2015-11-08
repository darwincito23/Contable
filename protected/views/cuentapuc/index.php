<?php
/* @var $this CuentapucController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cuentapucs',
);

$this->menu=array(
	array('label'=>'Create Cuentapuc', 'url'=>array('create')),
	array('label'=>'Manage Cuentapuc', 'url'=>array('admin')),
);
?>

<h1>Cuentapucs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
