<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	$model->idRegistroContableGastos,
);

$this->menu=array(
	array('label'=>'List Registrocontablegastos', 'url'=>array('index')),
	array('label'=>'Create Registrocontablegastos', 'url'=>array('create')),
	array('label'=>'Update Registrocontablegastos', 'url'=>array('update', 'id'=>$model->idRegistroContableGastos)),
	array('label'=>'Delete Registrocontablegastos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRegistroContableGastos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registrocontablegastos', 'url'=>array('admin')),
);
?>

<h1>View Registrocontablegastos #<?php echo $model->idRegistroContableGastos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idRegistroContableGastos',
		'fecha',
		'valorRegistroContable',
		'descripcion',
		'Usuario_idUsuario',
		'Proveedor_idProveedor',
		'CuentaPuc_idCuentaPuc',
	),
)); ?>
