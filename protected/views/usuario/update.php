<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->id_Usuario=>array('view','id'=>$model->id_Usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
	array('label'=>'View Usuario', 'url'=>array('view', 'id'=>$model->id_Usuario)),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1>Update Usuario <?php echo $model->id_Usuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>