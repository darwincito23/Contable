<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'goa',
);

?>

<div class="container center">
	<div class="row-fluyd">
		<div class="well">
			
			<h1>Gastos</h1>
		<div class="btn-group-vertical" role="group">
		<?php echo CHtml::link('Registrar',array('registrocontablegastos/create'),array('class'=>'btn btn_primary')); ?>	
		<?php echo CHtml::link('Administar',array('registrocontablegastos/admin'),array('class'=>'btn btn_primary')); ?>
		<?php echo CHtml::link('consolidado',array('site/register'),array('class'=>'btn btn_primary')); ?>
		</div>	

		</div>

			
	</div>

</div>
