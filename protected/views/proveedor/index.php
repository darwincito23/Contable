<?php
/* @var $this ProveedorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Administrar'=>array('admin'),
	'Lista de Terceros',
);

$this->menu=array(
	array('label'=>'Crear Tercero', 'url'=>array('create')),
	array('label'=>'Administrar Tercero', 'url'=>array('admin')),
);
?>
<br>
<br>
<div class="container-fluid">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="panel panel-default">				
			<div class="panel-heading">
			<h4 class="text-center">Lista de Terceros</h4>				  
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
					'summaryText' => "Mostrando {start} - {end} de {count} resultados", 
					'pager'=>array('htmlOptions'=>array('class'=>'pagination'),
						'header' => '', 'firstPageLabel' => '<< Primer Página', 'prevPageLabel' => 'Anterior', 
						'nextPageLabel' => 'Siguiente', 'lastPageLabel' => 'Ultima Página >>'),
				)); ?>
			</div>
		</div>

	</div>
	<div class="col-md-2"></div>
</div>
