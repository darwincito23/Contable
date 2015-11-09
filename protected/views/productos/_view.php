<?php
/* @var $this ProductosController */
/* @var $data Productos */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('idProductos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProductos), array('view', 'id'=>$data->idProductos)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreProducto')); ?>:</b>
	<?php echo CHtml::encode($data->nombreProducto); ?>
	<br />
	<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />-->


</div>