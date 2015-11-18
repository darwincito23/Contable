<?php
/* @var $this ConsolidadoecpvController */
/* @var $model Consolidadoecpv */

$this->breadcrumbs=array(
	'Consolidadoecpvs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Consolidadoecpv', 'url'=>array('index')),
	array('label'=>'Manage Consolidadoecpv', 'url'=>array('admin')),
);
?>

<h1>Create Consolidadoecpv</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>