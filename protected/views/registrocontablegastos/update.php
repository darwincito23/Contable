<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	$model->idRegistroContableGastos=>array('view','id'=>$model->idRegistroContableGastos),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Registroscontables de gastos', 'url'=>array('index')),
	array('label'=>'Crear Registro contable de gastos', 'url'=>array('create')),
	array('label'=>'Ver Registro contable de gastos', 'url'=>array('view', 'id'=>$model->idRegistroContableGastos)),
	array('label'=>'Administrar Registro contable de gastos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Registros contables de gastos <?php echo $model->idRegistroContableGastos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>