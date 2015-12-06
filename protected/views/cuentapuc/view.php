<?php
/* @var $this CuentapucController */
/* @var $model Cuentapuc */

$this->breadcrumbs=array(
	'Administrar Cuentas PUC'=>array('admin'),
	'Cuenta PUC: '.$model->nombreCuentaPuc,
);

$this->menu=array(
	array('label'=>'Lista de Cuentas PUC', 'url'=>array('index')),
	array('label'=>'Crear Cuenta PUC', 'url'=>array('create')),
	array('label'=>'Actualizar Cuenta PUC', 'url'=>array('update', 'id'=>$model->idCuentaPuc)),
	array('label'=>'Eliminar Cuenta PUC', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCuentaPuc),'confirm'=>'¿Esta Seguro que desea Eliminar este Item?')),
	array('label'=>'Administrar Cuenta PUC', 'url'=>array('admin')),
);
?>
<br>
<br>
<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">				
			<div class="panel-heading">
			<h2 class="text-center"><?php echo $model->nombreCuentaPuc; ?></h2>				  
			</div>
			<div class="panel-body">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					//'htmlOptions'=>array('class'=>'table table-striped'),
					'attributes'=>array(
						'idCuentaPuc',
						'nombreCuentaPuc',
						'codigoCuentaPuc',
						'TipoGasto_idTipoGasto',
						'CuentaPadre',		
					),
				)); ?>
			</div>
		</div>

	</div>
	<div class="col-md-3"></div>
</div>
