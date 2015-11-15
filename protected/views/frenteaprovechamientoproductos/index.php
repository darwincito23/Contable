<?php
/* @var $this FrenteaprovechamientoProductosController */
/* @var $model FrenteaprovechamientoProductos */
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
					<?php echo $form->dropDownList($model,'FrenteAprovechamiento_idFA',array('')); ?>
					<?php echo $form->error($model,'FrenteAprovechamiento_idFA'); ?>
				</div>

				<div class="row buttons">
					<?php echo CHtml::submitButton('Siguiente', array('submit'=>array('frenteaprovechamientoproductos/create'),'class'=>'btn btn-success btn-md')); ?>
				</div>

			<?php $this->endWidget(); ?>

		</div><!-- form -->
	</div>

</div>

