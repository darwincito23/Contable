<?php
/* @var $this TipogastoController */
/* @var $data Tipogasto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoGasto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipoGasto), array('view', 'id'=>$data->idTipoGasto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreTipoGasto')); ?>:</b>
	<?php echo CHtml::encode($data->nombreTipoGasto); ?>
	<br />


</div>