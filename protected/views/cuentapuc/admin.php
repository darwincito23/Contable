<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentapucs'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Cuenta PUC', 'url'=>array('index')),
	array('label'=>'Crear Cuenta PUC', 'url'=>array('create')),
);
?>

<h1>Administrar Cuenta PUC</h1>

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
		array(
			'name'=>'nombreCuentaPuc',
			'value'=>'$data->nombreCuentaPuc',
			'filter'=>$model->getListCuentaPuc('nombre'),
			),
		array(
			'name'=>'codigoCuentaPuc',
			'value'=>'$data->codigoCuentaPuc',
			'filter'=>$model->getListCuentaPuc('codigo'),
			),
		array(
			'name'=>'TipoGasto_idTipoGasto',
			'value'=>'$data->tipoGastoIdTipoGasto->nombreTipoGasto',
			'filter'=>$model->getTipoGasto(),
			),
		//array(
		//	'name'=>'CuentaPadre',
		//	'value'=>'$data->cuentaPadre!=null?$data->cuentaPadre->nombreCuentaPuc:null',
		//	'filter'=>'CuentaPadre',
		//	),	
			//'TipoGasto_idTipoGasto',
			//'CuentaPadre',	
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
