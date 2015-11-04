<?php
/* @var $this RegistrocontablegastosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registrocontablegastoses',
);

$this->menu=array(
	array('label'=>'Create Registrocontablegastos', 'url'=>array('create')),
	array('label'=>'Manage Registrocontablegastos', 'url'=>array('admin')),
);
?>

<h1>Registrocontablegastoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
