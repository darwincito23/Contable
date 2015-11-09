<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'Frenteaprovechamientos'=>array('index'),
	$model->idFrenteAprovechamiento=>array('view','id'=>$model->idFrenteAprovechamiento),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Frentes', 'url'=>array('index')),
	array('label'=>'Crear Frente', 'url'=>array('create')),
	array('label'=>'Ver Frente', 'url'=>array('view', 'id'=>$model->idFrenteAprovechamiento)),
	array('label'=>'Administrar Frente', 'url'=>array('admin')),
);
?>

<div class="container text-center">
	<h1>Actualizar Frente de Aprovechamiento <?php echo $model->idFrenteAprovechamiento; ?></h1>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
