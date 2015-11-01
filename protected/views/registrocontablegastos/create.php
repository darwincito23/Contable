<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registro contable'=>array('index'),
	'Añadir registro',
);

$this->menu=array(
	array('label'=>'Ver Registros', 'url'=>array('index')),
	array('label'=>'Administrar Registros', 'url'=>array('admin')),
);
?>

<h1>Ingresar Registros contables</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>