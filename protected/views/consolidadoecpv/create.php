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



<div class="container-fluid text-center">
	<h1>Consolidado ECPV</h1>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
	<div class="col-md-2"></div>	
</div>

