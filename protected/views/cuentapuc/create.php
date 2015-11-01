<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentapucs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'regresar', 'url'=>array('admin')),
);
?>

<h1>Create Cuentapuc</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>