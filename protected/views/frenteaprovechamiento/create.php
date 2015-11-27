<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'Frenteaprovechamientos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Frentes', 'url'=>array('index')),
	array('label'=>'Administrar Frente', 'url'=>array('admin')),
);
?>
<div class="container-fluid text-center">
	<h1>Crear Frenteaprovechamiento</h1>
	<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
</div>

