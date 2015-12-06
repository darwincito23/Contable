<?php
/* @var $this RegistroecpvController */

$this->breadcrumbs=array(
	'ECPV'=>array('site/ecpv'),
	'Registro ECPV Selección FA'=>array('index'),
	'Crear Registro ECPV'=>array('registroecpv/crear/'.$model->frenteAprovechamientoProductosFrenteAprovechamientoIdFA->id_FrenteAprovechamiento),	
	'Actualizar Registro ECPV',
);
?>
<div class="panel panel-default text-center">
	<div class="panel-heading">
		<h4 class="text-center">
				<?php $criteria =new CDbCriteria;
				$criteria->condition='idFrenteaprovechamiento=:id';
				$criteria->params=array(':id'=>$model->frenteA);
				$nombre=Frenteaprovechamiento::model()->find($criteria);
				echo $nombre->nombreFrenteAprovechamiento; 
				?>
			</h4>
	</div>
	<div class="panel-body">				
		<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'registro-ecpv-crear-form',
		'enableAjaxValidation'=>false,
		)); ?>
		<!--form-->
		<div class="form">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="row">
					<?php echo $form->errorSummary($model,'Por favor solucione los siguientes errores:'); ?>
						<div class="row">					
							<?php echo $form->labelEx($model,'fecha'); ?>
							<?php //echo $form->textField($model,'fecha'); ?>
							<?php echo $form->error($model,'fecha'); ?>
							<?php echo $this->widget('zii.widgets.jui.CJuiDatePicker',array(
											      'model'=>$model,
											      'attribute'=>'fecha',
											      // additional javascript options for the date picker plugin
											      'options'=>array(
											          'showAnim'=>'fold',
											          'dateFormat' => 'yy-mm-dd'
											      ),
											      'htmlOptions'=>array(
											          'style'=>'height:20px;',
											          'id'=>'fecha_i'
											      ),
											  ),true);
							?>
						</div>
									
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<?php echo $form->labelEx($model,'Productos'); ?>							
								<?php echo $form->dropDownList($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA',$model->getListFap($model->frenteA)); ?>
								<?php echo $form->error($model,'FrenteAprovechamiento_Productos_FrenteAprovechamiento_idFA'); ?>
							</div>
							<div class="col-md-3">
								<?php echo $form->labelEx($model,'cantidad'); ?>
								<?php echo $form->textField($model,'cantidad'); ?>
								<?php echo $form->error($model,'cantidad'); ?>
							</div>	
							<div class="col-md-3"></div>			
						</div>
									
						<div class="row buttons">
							<?php echo CHtml::submitButton('Guardar',array('class'=>'btn btn-success btn-md')); ?>
						</div>
															
				</div><!--end row-->
			</div>
			<div class="col-md-1"></div>
		</div><!-- form -->					
			<?php $this->endWidget(); ?>				
	</div><!--end panel.body-->			
</div><!--end panel-default-->
		
