<?php
/* @var $this FrenteaprovechamientoController */
/* @var $model Frenteaprovechamiento */

$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),
	'Administrar FA y Productos'=>array('frenteaprovechamientoproductos/index'),
	'Administrar FA'=>array('admin'),
	'Frente de Aprovechamiento: '.$model->nombreFrenteAprovechamiento,
);

$this->menu=array(
	array('label'=>'Lista de Frentes', 'url'=>array('index')),
	array('label'=>'Crear Frente', 'url'=>array('create')),
	array('label'=>'Actualizar Frente', 'url'=>array('update', 'id'=>$model->idFrenteAprovechamiento)),
	array('label'=>'Eliminar Frente', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFrenteAprovechamiento),'confirm'=>'Está seguro de eliminar este elemento?')),
	array('label'=>'Administrar Frente', 'url'=>array('admin')),
);
?>
<br>
<br>
<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">				
			<div class="panel-heading">
			<h2 class="text-center"><?php echo $model->nombreFrenteAprovechamiento; ?></h2>				  
			</div>
			<div class="panel-body">
				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
						'idFrenteAprovechamiento',
						'nombreFrenteAprovechamiento',
						//'Usuario_idUsuario',
					),
				)); ?>
				</div>
		</div>

	</div>
	<div class="col-md-3"></div>
</div>


