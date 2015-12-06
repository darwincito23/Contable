<?php
/* @var $this FrenteaprovechamientoController */
/* @var $data Frenteaprovechamiento */
?>

<div class="view">
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('idFrenteAprovechamiento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFrenteAprovechamiento), array('view', 'id'=>$data->idFrenteAprovechamiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreFrenteAprovechamiento')); ?>:</b>
	<?php echo CHtml::encode($data->nombreFrenteAprovechamiento); ?>
	<br />
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />-->


</div>