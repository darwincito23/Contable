<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Registrocontablegastos', 'url'=>array('index')),
	array('label'=>'Manage Registrocontablegastos', 'url'=>array('admin')),
);
?>

<h1>Create Registrocontablegastos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>