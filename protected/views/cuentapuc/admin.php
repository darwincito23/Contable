<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentapucs'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Cuenta Puc', 'url'=>array('index')),
	array('label'=>'Crear Cuenta Puc', 'url'=>array('create')),
);
?>

<h1>Administrar Cuenta Puc</h1>

<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cuentapuc-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(		
		'nombreCuentaPuc',
		'codigoCuentaPuc',
		'TipoGasto_idTipoGasto',
		'CuentaPadre',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
