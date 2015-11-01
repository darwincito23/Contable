<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Igresar registros contables'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Administrar CuentasPuc', 'url'=>array('cuentapuc/admin')),
	array('label'=>'Administrar Proveedores', 'url'=>array('proveedor/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#registrocontablegastos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Registros contables</h1>

<p>

</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registrocontablegastos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'fecha',
		'descripcion',
		'valor',
		'idRegistroContable',
		'idCuentaPUC',
		'idProveedor',
		/*
		'idUsuario',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
