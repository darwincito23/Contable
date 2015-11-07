<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	$model->idRegistroContableGastos,
);

$this->menu=array(
<<<<<<< HEAD
<<<<<<< HEAD
	array('label'=>'Ver Registros', 'url'=>array('index')),
||||||| 5e93c15... Versión 1.6.2
	array('label'=>'Ver Registros', 'url'=>array('index')),
=======

>>>>>>> parent of 5e93c15... Versión 1.6.2
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Actualiza Registro', 'url'=>array('update', 'id'=>$model->idRegistroContableGastos)),
	array('label'=>'Borrar Registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRegistroContableGastos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Registro', 'url'=>array('admin')),
||||||| 256b063... Versión 1.6.1

	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Actualiza Registro', 'url'=>array('update', 'id'=>$model->idRegistroContableGastos)),
	array('label'=>'Borrar Registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRegistroContableGastos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Registro', 'url'=>array('admin')),
=======

	array('label'=>'Create Registrocontablegastos', 'url'=>array('create')),
	array('label'=>'Update Registrocontablegastos', 'url'=>array('update', 'id'=>$model->idRegistroContableGastos)),
	array('label'=>'Delete Registrocontablegastos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRegistroContableGastos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Registrocontablegastos', 'url'=>array('admin')),
>>>>>>> parent of 256b063... Versión 1.6.1
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
