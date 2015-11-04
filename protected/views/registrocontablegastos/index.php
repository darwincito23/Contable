<?php
/* @var $this RegistrocontablegastosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registro Contablegastos',
);

$this->menu=array(
	array('label'=>'Crear Registro contable de gastos', 'url'=>array('create')),
	array('label'=>'Administrar Registro contable de gastos', 'url'=>array('admin')),
);
?>

<h1>Registro Contable Gastos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
