<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentapucs'=>array('index'),
	$model->idCuentaPuc=>array('view','id'=>$model->idCuentaPuc),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cuentapuc', 'url'=>array('index')),
	array('label'=>'Create Cuentapuc', 'url'=>array('create')),
	array('label'=>'View Cuentapuc', 'url'=>array('view', 'id'=>$model->idCuentaPuc)),
	array('label'=>'Manage Cuentapuc', 'url'=>array('admin')),
);
?>

<h1>Update Cuentapuc <?php echo $model->idCuentaPuc; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>