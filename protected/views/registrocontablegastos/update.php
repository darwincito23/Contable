<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	$model->idRegistroContableGastos=>array('view','id'=>$model->idRegistroContableGastos),
	'Update',
);

$this->menu=array(
	array('label'=>'Crear Registro', 'url'=>array('create')),
	array('label'=>'Ver Registro', 'url'=>array('view', 'id'=>$model->idRegistroContableGastos)),
	array('label'=>'Administrar Registro', 'url'=>array('admin')),
	array('label'=>'Ver Lista de Registros', 'url'=>array('index')),
);
?>

<h1>Update Registrocontablegastos <?php echo $model->idRegistroContableGastos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>