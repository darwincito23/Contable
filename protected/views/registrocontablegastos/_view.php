<?php
/* @var $this RegistrocontablegastosController */
/* @var $data Registrocontablegastos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idRegistroContableGastos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idRegistroContableGastos), array('view', 'id'=>$data->idRegistroContableGastos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valorRegistroContable')); ?>:</b>
	<?php echo CHtml::encode($data->valorRegistroContable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />


</div>