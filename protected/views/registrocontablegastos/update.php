<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	$model->idRegistroContableGastos=>array('view','id'=>$model->idRegistroContableGastos),
	'Update',
);

$this->menu=array(
	array('label'=>'Create Registrocontablegastos', 'url'=>array('create')),
	array('label'=>'View Registrocontablegastos', 'url'=>array('view', 'id'=>$model->idRegistroContableGastos)),
	array('label'=>'Manage Registrocontablegastos', 'url'=>array('admin')),
);
?>

<h1>Update Registrocontablegastos <?php echo $model->idRegistroContableGastos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>