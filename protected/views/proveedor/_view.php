<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProveedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProveedor), array('view', 'id'=>$data->idProveedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreProveedor')); ?>:</b>
	<?php echo CHtml::encode($data->nombreProveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoProveedor')); ?>:</b>
	<?php echo CHtml::encode($data->codigoProveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numeroContacto')); ?>:</b>
	<?php echo CHtml::encode($data->numeroContacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIT_CC')); ?>:</b>
	<?php echo CHtml::encode($data->NIT_CC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />


</div>