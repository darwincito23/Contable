<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentapucs'=>array('index'),
	$model->idCuenta=>array('view','id'=>$model->idCuenta),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cuentapuc', 'url'=>array('index')),
	array('label'=>'Create Cuentapuc', 'url'=>array('create')),
	array('label'=>'View Cuentapuc', 'url'=>array('view', 'id'=>$model->idCuenta)),
	array('label'=>'Manage Cuentapuc', 'url'=>array('admin')),
);
?>

<h1>Update Cuentapuc <?php echo $model->idCuenta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>