<?php
/* @var $this RegistrocontablegastosController */
/* @var $model Registrocontablegastos */

$this->breadcrumbs=array(
	'Registrocontablegastoses'=>array('index'),
	'Crear',
);

$this->menu=array(	
	array('label'=>'Administrar Registros', 'url'=>array('admin')),
	array('label'=>'Ver Registros', 'url'=>array('index')),
);
?>
<h1 class="text-center">Crear Registro Contable de Gastos</h1>
<br>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>