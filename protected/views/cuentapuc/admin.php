<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Cuentas Puc'=>array('index'),
	'Aministrar',
);

$this->menu=array(
	array('label'=>'Añadir Cuenta', 'url'=>array('create')),
	array('label'=>'Regresar', 'url'=>array('registrocontablegastos/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cuentapuc-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Cuentas Puc</h1>

<p>
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
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
		'idCuenta',
		'nombreCuenta',
		'codigoCuenta',
		'cuentaPadre',
		'idTipoGasto',
		'id_registro_contable_gasto',
		/*
		'idUsuario',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
