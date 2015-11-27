<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	$model->idRegistroContableGastos,
);

$this->menu=array(
	array('label'=>'Ver Registros', 'url'=>array('index')),
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Actualizar Registro', 'url'=>array('update', 'id'=>$model->idRegistroContableGastos)),
	array('label'=>'Borrar Registro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idRegistroContableGastos),'confirm'=>'Esta Usted Seguro que desea borrar este Item?')),
	array('label'=>'Administrar Registro', 'url'=>array('admin')),
);
?>

<h1>Ver Registro Número: <?php echo $model->idRegistroContableGastos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'idRegistroContableGastos',
		'fecha',
		'valorRegistroContable',
		'descripcion',
		//'Usuario_idUsuario',
		'Proveedor_idProveedor',
		'CuentaPuc_idCuentaPuc',
	),
)); ?>
