<?php
/* @var $this RegistrocontablegastosController */
/* @var $data Registrocontablegastos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRegistroContable')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idRegistroContable), array('view', 'id'=>$data->idRegistroContable)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCuentaPUC')); ?>:</b>
	<?php echo CHtml::encode($data->idCuentaPUC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProveedor')); ?>:</b>
	<?php echo CHtml::encode($data->idProveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>