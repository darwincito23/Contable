<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listado de Registros Contables de Gastos', 'url'=>array('index')),
	array('label'=>'Administación de Registros Contables de  Gastos', 'url'=>array('admin')),
);
?>

<h1>Crear Registro Contable de Gastos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>