<?php
/* @var $this FrenteaprovechamientoProductosController */
/* @var $model Frenteaprovechamientoproductos */
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	'Frenteaprovechamientoproductos'=>array('/frenteaprovechamientoproductos'),
	'Index',
);

?>
<div class="container-fluid text-center">
	<div class="row">
		<h1>Escoja el Frente de Aprovechamiento</h1>
	</div>
	<div class="row">
		<div class="form">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'frenteaprovechamiento-productos-index-form',
				'enableAjaxValidation'=>false,
			)); ?>

				<?php echo $form->errorSummary($model); ?>

				<div class="row">
					<?php echo $form->labelEx($model,''); ?>
					<?php echo $form->dropDownList($model,'id_FrenteAprovechamiento',$model->getListFa()); ?>
					<?php echo $form->error($model,'id_FrenteAprovechamiento');?>
				</div>				

				<div class="row buttons">
					<?php echo CHtml::submitButton('Siguiente',array('class'=>'btn btn-success btn-md')); ?>
				</div>

			<?php $this->endWidget(); ?>

		</div><!-- form -->
	</div>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="panel panel-default col-md-4">
				  
				  <div class="panel-body">
				   	<div class="row">
					          	<div class="col-md-1">		          		
					          	</div>
					          	<div class="col-md-10">								
									<?php echo CHtml::submitButton('Administrar Frente Aprovechamiento', array('submit'=>array('frenteaprovechamiento/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>
									<?php echo CHtml::submitButton('Administrar Productos', array('submit'=>array('productos/admin'),'class'=>'btn btn-success btn-md btn-block')); ?>		          		
					          	</div>
					          	<div class="col-md-1">        		
				          		</div>
					</div>	 
				  </div>
			</div>
		<div class="col-md-4"></div>	
	</div>
	
		

</div>

