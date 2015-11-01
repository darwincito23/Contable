<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProductos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProductos), array('view', 'id'=>$data->idProductos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreProducto')); ?>:</b>
	<?php echo CHtml::encode($data->nombreProducto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo')); ?>:</b>
	<?php echo CHtml::encode($data->costo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFrente_Aprovechamientos')); ?>:</b>
	<?php echo CHtml::encode($data->idFrente_Aprovechamientos); ?>
	<br />


</div>