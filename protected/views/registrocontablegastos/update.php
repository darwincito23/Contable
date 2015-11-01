<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	$model->idRegistroContable=>array('view','id'=>$model->idRegistroContable),
	'Update',
);

$this->menu=array(
	array('label'=>'List Registrocontablegastos', 'url'=>array('index')),
	array('label'=>'Create Registrocontablegastos', 'url'=>array('create')),
	array('label'=>'View Registrocontablegastos', 'url'=>array('view', 'id'=>$model->idRegistroContable)),
	array('label'=>'Manage Registrocontablegastos', 'url'=>array('admin')),
);
?>

<h1>Update Registrocontablegastos <?php echo $model->idRegistroContable; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>