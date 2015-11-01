<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	$model->idRegistroContable,
);

$this->menu=array(
	array('label'=>'List Registrocontablegastos', 'url'=>array('index')),
	array('label'=>'Create Registrocontablegastos', 'url'=>array('create')),
	array('label'=>'Update Registrocontablegastos', 'url'=>array('update', 'id'=>$model->idRegistroContable)),
	array('label'=>'Delete Registrocontablegastos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRegistroContable),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registrocontablegastos', 'url'=>array('admin')),
);
?>

<h1>View Registrocontablegastos #<?php echo $model->idRegistroContable; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'fecha',
		'descripcion',
		'valor',
		'idRegistroContable',
		'idCuentaPUC',
		'idProveedor',
		'idUsuario',
	),
)); ?>
