<?php
/* @var $this ConsolidadoecpvController */
/* @var $data Consolidadoecpv */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idConsolidado_Estado_Costo_Producto_Vendido')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idConsolidado_Estado_Costo_Producto_Vendido), array('view', 'id'=>$data->idConsolidado_Estado_Costo_Producto_Vendido)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TotalCostoFA')); ?>:</b>
	<?php echo CHtml::encode($data->TotalCostoFA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Total_Cantidad_Producto')); ?>:</b>
	<?php echo CHtml::encode($data->Total_Cantidad_Producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Total_Costo_Producto')); ?>:</b>
	<?php echo CHtml::encode($data->Total_Costo_Producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Costo_Producto_Vendido_Final')); ?>:</b>
	<?php echo CHtml::encode($data->Costo_Producto_Vendido_Final); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Registro_ECPV_idRegistro_ECPV')); ?>:</b>
	<?php echo CHtml::encode($data->Registro_ECPV_idRegistro_ECPV); ?>
	<br />

	*/ ?>

</div>