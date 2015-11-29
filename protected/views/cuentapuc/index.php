<?php
/* @var $this CuentapucController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cuenta Puc',
);

$this->menu=array(
	array('label'=>'Crear Cuenta PUC', 'url'=>array('create')),
	array('label'=>'Administrar Cuenta PUC', 'url'=>array('admin')),
);
?>
<br>
<br>
<div class="container-fluid">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<div class="panel panel-default">				
			<div class="panel-heading">
			<h4 class="text-center">Cuenta PUC</h4>				  
			</div>
			<div class="panel-body">
				<?php $this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'summaryText' => "Mostrando {start} - {end} de {count} resultados", 
					'pager'=>array('htmlOptions'=>array('class'=>'pagination'),
						'header' => '', 'firstPageLabel' => '<< Primer Página', 'prevPageLabel' => 'Anterior', 
						'nextPageLabel' => 'Siguiente', 'lastPageLabel' => 'Ultima Página >>'),
					'itemView'=>'_view',
				)); ?>
			</div>
		</div>

	</div>
	<div class="col-md-2"></div>
</div>
