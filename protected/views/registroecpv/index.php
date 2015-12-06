<?php
/* @var $this RegistroEcpvController */
/* @var $model RegistroEcpv */
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),
	'Registro ECPV Selección FA'

);
?>

<br>
<br>
<div class="container-fluid">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="panel panel-default">				
			<div class="panel-heading">
			<h4 class="text-center">Realizar Registro ECPV</h4>				  
			</div>
			<div class="panel-body text-center">				
					<div class="row">	
						<!--form -->	
						<div class="form">
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'registro-ecpv-index-form',
								'enableAjaxValidation'=>false,
							)); ?>

							<div class="row">
								<?php echo $form->labelEx($model,'Escoja el Frente de Aprovechamiento'); ?>
								<?php echo $form->dropDownList($model,'frenteA',FrenteaprovechamientoProductos::model()->getListFa()); ?>
							</div>
						</div><!-- end form -->
					</div>

					<div class="row buttons">
								<?php echo CHtml::submitButton('Siguiente', array('class'=>'btn btn-success btn-md')); ?>
					</div>
					<?php $this->endWidget(); ?>
			</div>
		</div>

	</div>
	<div class="col-md-4"></div>
</div>
					
				
