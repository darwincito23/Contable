<?php
/* @var $this FrenteaprovechamientoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),
	'Administrar FA y Productos'=>array('frenteaprovechamientoproductos/index'),
	'Administrar FA'=>array('admin'),
	'Lista de Frentes de Aprovechamiento'
);

$this->menu=array(
	array('label'=>'Crear Frente', 'url'=>array('create')),
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
			<h2 class="text-center">lista de Frentes de Aprovechamiento</h2>				  
			</div>
			<div class="panel-body">	
				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'summaryText' => "Mostrando {start} - {end} de {count} resultados", 
					//widget de yii para cambiar el aspecto y textos de la paginación.
					'pager'=>array('htmlOptions'=>array('class'=>'pagination'),
						'header' => '', 'firstPageLabel' => '<< Primer Página', 'prevPageLabel' => 'Anterior', 
						'nextPageLabel' => 'Siguiente', 'lastPageLabel' => 'Ultima Página >>'),
					'itemView'=>'_view',
				)); ?>
			</div>
		</div>

	</div>
	<div class="col-md-3"></div>
</div>
