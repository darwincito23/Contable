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

	<b><?php echo CHtml::encode($data->getAttributeLabel('nit_cc')); ?>:</b>
	<?php echo CHtml::encode($data->nit_cc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registro_contable_gastos')); ?>:</b>
	<?php echo CHtml::encode($data->id_registro_contable_gastos); ?>
	<br />

	*/ ?>

</div>