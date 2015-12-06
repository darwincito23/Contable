<?php
/* @var $this CuentapucController */
/* @var $data Cuentapuc */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCuentaPuc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idCuentaPuc), array('view', 'id'=>$data->idCuentaPuc)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreCuentaPuc')); ?>:</b>
	<?php echo CHtml::encode($data->nombreCuentaPuc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoCuentaPuc')); ?>:</b>
	<?php echo CHtml::encode($data->codigoCuentaPuc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo de Gasto')); ?>:</b>
	<?php echo CHtml::encode($data->tipoGastoIdTipoGasto->nombreTipoGasto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CuentaPadre')); ?>:</b>
	<?php echo CHtml::encode($data->CuentaPadre); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />-->


</div>