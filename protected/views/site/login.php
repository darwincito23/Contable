<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';

?>

<div class="container center">
<div class="row-fluid">
 

<h5>Ingrese con su nombre de usuario y contraseña:</h5>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'htmlOptions'=>array("class"=>"well well-large"),
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<div class="">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>
	</div>
<div class="group-form">
	
	
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	

	
		<?php echo CHtml::submitButton('Login',array("class"=>"btn btn-primary")); ?>
	
</div>
	

<?php $this->endWidget(); ?>

</div>
</div>

</div><!-- form -->
