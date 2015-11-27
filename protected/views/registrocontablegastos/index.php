<?php
/* @var $this RegistrocontablegastosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registro contable de Gastos',
);

$this->menu=array(
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Administrar Registro', 'url'=>array('admin')),
);
?>

<h1>Registro Contable de Gastos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
