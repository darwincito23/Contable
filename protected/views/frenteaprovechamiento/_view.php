<?php
/* @var $this FrenteaprovechamientoController */
/* @var $data Frenteaprovechamiento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idfrenteAprovechamiento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idfrenteAprovechamiento), array('view', 'id'=>$data->idfrenteAprovechamiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreFrenteAprovechamiento')); ?>:</b>
	<?php echo CHtml::encode($data->nombreFrenteAprovechamiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProductos')); ?>:</b>
	<?php echo CHtml::encode($data->idProductos); ?>
	<br />


</div>