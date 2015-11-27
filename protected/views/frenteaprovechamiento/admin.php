<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'Frenteaprovechamientos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Frentes', 'url'=>array('index')),
	array('label'=>'Crear Frente', 'url'=>array('create')),
);

?>

<h1>Administrar Frente de Aprovechamientos</h1>

<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'frenteaprovechamiento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idFrenteAprovechamiento',
		'nombreFrenteAprovechamiento',
		//'Usuario_idUsuario',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
