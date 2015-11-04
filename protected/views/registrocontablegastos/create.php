<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Registros contables de gastos', 'url'=>array('index')),
	array('label'=>'Administrar Registro contable de gastos', 'url'=>array('admin')),
);
?>

<h1>Crear Registro contable de gastos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>