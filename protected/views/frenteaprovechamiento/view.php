<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'Frenteaprovechamientos'=>array('index'),
	$model->idFrenteAprovechamiento,
);

$this->menu=array(
	array('label'=>'Lista de Frentes', 'url'=>array('index')),
	array('label'=>'Crear Frente', 'url'=>array('create')),
	array('label'=>'Actualizar Frente', 'url'=>array('update', 'id'=>$model->idFrenteAprovechamiento)),
	array('label'=>'Eliminar Frente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFrenteAprovechamiento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Frente', 'url'=>array('admin')),
);
?>

<h1>Vista de Frente de Aprovechamiento Número: <?php echo $model->idFrenteAprovechamiento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'idFrenteAprovechamiento',
		'nombreFrenteAprovechamiento',
		//'Usuario_idUsuario',
	),
)); ?>
