<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastos'=>array('index'),
	'Administrar',
);

$this->menu=array(	
	array('label'=>'Crear Registro contable de gastos', 'url'=>array('create')),
);

?>


<h1>Administrar Registro contable de gastos</h1>


<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'registrocontablegastos-grid',
	'afterAjaxUpdate'=>'reinstallDatePicker',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		
		array(
			'name'=>'ccuenta',
			'value'=>'$data->cuentaPucIdCuentaPuc->codigoCuentaPuc',
			'filter'=>$model->getListCuentaPuc('codigo'),
			'header'=>'Codigo cuenta',
			),
		
		array(
			'name'=>'CuentaPuc_idCuentaPuc',
			'value'=>'$data->cuentaPucIdCuentaPuc->nombreCuentaPuc',
			'filter'=>$model->getListCuentaPuc('nombre'),
			'header'=>'Nombre cuenta',
			),
		
		array(
			'name'=>'cprovedor',
			'header'=>'Codigo Proveedor',
			'value'=>'$data->proveedorIdProveedor->codigoProveedor',
			'filter'=>$model->getListProveedor('codigo'),
		),

		array(
			'name'=>'Proveedor_idProveedor',
			'value'=>'$data->proveedorIdProveedor->nombreProveedor',
			'filter'=>$model->getListProveedor('nombre'),
			'header'=>'Nombre Proveedor',
			),		
		array(
			'name'=>'fecha',
			'filter'=>$this->widget('zii.widgets.jui.CJuiDatePicker',array(
								      'model'=>$model,
								      'attribute'=>'fecha',
								      'htmlOptions' => array(
                    					'id' => 'fecha_dp',
                    					'size' => '10',
                    					'style'=>'height:20px;',
         
               						 	),

								      // additional javascript options for the date picker plugin
								      'options'=>array( 
								      	'showOn' => 'focus',
                    					'showAnim'=>'fold',
								          'dateFormat'=>'yy-mm-dd',
								      ),
								  ),true),
			),
		'valorRegistroContable',
		'descripcion',
		
		
		
		/*
		'CuentaPuc_idCuentaPuc',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
