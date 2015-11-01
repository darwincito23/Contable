<?php
/* @var $this CuentapucController */
/* @var $data Cuentapuc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCuenta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCuenta), array('view', 'id'=>$data->idCuenta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCuenta')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoCuenta')); ?>:</b>
	<?php echo CHtml::encode($data->codigoCuenta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuentaPadre')); ?>:</b>
	<?php echo CHtml::encode($data->cuentaPadre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoGasto')); ?>:</b>
	<?php echo CHtml::encode($data->idTipoGasto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_registro_contable_gasto')); ?>:</b>
	<?php echo CHtml::encode($data->id_registro_contable_gasto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>