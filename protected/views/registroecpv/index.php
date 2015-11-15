<?php
/* @var $this RegistroEcpvController */
/* @var $model RegistroEcpv */
/* @var $form CActiveForm */
$this->breadcrumbs=array(
	'Registroecpv',
);
?>
<div class="container-fluid text-center">
	<div class="row">
		<h1>Escoja el Frente de Aprovechamiento</h1>
	</div>
	<div class="row">		
		<div class="form">

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'registro-ecpv-index-form',
			'enableAjaxValidation'=>false,
		)); ?>
			<?php //echo $form->errorSummary($model); ?>
			
			<div class="row">
				<?php echo $form->labelEx($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'); ?>
				<?php echo $form->dropDownList($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA',array('')); ?>
				<?php echo $form->error($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'); ?>
			</div>

			

		<?php $this->endWidget(); ?>

		</div><!-- form -->
	</div>
		<div class="row buttons">
				<?php echo CHtml::submitButton('Siguiente', array('submit'=>array('registroecpv/crear'),'class'=>'btn btn-success btn-md')); ?>
		</div>
	
</div>
<