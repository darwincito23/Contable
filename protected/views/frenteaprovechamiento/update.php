<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),
	'Administrar FA y Productos'=>array('frenteaprovechamientoproductos/index'),
	'Administrar FA'=>array('admin'),
	'Actualizar Frente de Aprovechamiento: '.$model->nombreFrenteAprovechamiento=>array('view','id'=>$model->idFrenteAprovechamiento),
	
);

$this->menu=array(
	array('label'=>'Lista de Frentes', 'url'=>array('index')),
	array('label'=>'Crear Frente', 'url'=>array('create')),
	array('label'=>'Ver Frente', 'url'=>array('view', 'id'=>$model->idFrenteAprovechamiento)),
	array('label'=>'Administrar Frente', 'url'=>array('admin')),
);
?>
<br>
<br>
<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">				
			<div class="panel-heading">
			<h2 class="text-center">Actualizar Frente de Aprovechamiento: <?php echo $model->nombreFrenteAprovechamiento; ?></h2>				  
			</div>
			<div class="panel-body text-center">	
				<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
			</div>
		</div>

	</div>
	<div class="col-md-3"></div>
</div>

