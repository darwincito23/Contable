<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Administrar'=>array('admin'),
	'Tercero: '.$model->nombreProveedor,
);

$this->menu=array(
	array('label'=>'Lista Tercero', 'url'=>array('index')),
	array('label'=>'Crear Tercero', 'url'=>array('create')),
	array('label'=>'Actualizar Tercero', 'url'=>array('update', 'id'=>$model->idProveedor)),
	array('label'=>'Eliminar Tercero', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idProveedor),'confirm'=>'Está seguro que desea eliminar este elemento?')),
	array('label'=>'AdministrarTercero', 'url'=>array('admin')),
);
?>
<br>
<br>
<div class="container-fluid">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="panel panel-default">				
			<div class="panel-heading">
			<h4 class="text-center"><?php echo $model->nombreProveedor; ?></h4>				  
			</div>
			<div class="panel-body">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						//'idProveedor',
						'nombreProveedor',
						'codigoProveedor',
						'numeroContacto',
						'direccion',
						'NIT_CC',
						//'Usuario_idUsuario',
					),
				)); ?>
			</div>
		</div>

	</div>
	<div class="col-md-2"></div>
</div>