<?php
/* @var $this ProductosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),	
	'Adminsitrar FA y Productos'=>array('frenteaprovechamientoproductos/index'),
	'Administrar Productos'=>array('admin'),
	'Lista de Productos',
);

$this->menu=array(
	array('label'=>'Crear Productos', 'url'=>array('create')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>

<br>
<br>
<div class="container-fluid">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel panel-default">				
			<div class="panel-heading">
				<h2 class="text-center">Lista de Productos</h2>				  
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