<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentapucs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cuentapuc', 'url'=>array('index')),
	array('label'=>'Manage Cuentapuc', 'url'=>array('admin')),
);
?>

<h1>Create Cuentapuc</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>