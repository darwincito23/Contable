<?php

class ConsolidadogoaController extends Controller
{
	public function actionIndex()
	{
	
			$model=new ConsolidadoGoaGov;
			if(isset($_POST['ConsolidadoGoaGov']))
			{
				$model->fecha_Inicio=$_POST['ConsolidadoGoaGov']['fecha_Inicio'];
				$model->fecha_fin=$_POST['ConsolidadoGoaGov']['fecha_fin'];
				isset($_POST['ConsolidadoGoaGov']['proveedorc'])?$model->proveedorc=$_POST['ConsolidadoGoaGov']['proveedorc']:$model;
				isset($_POST['ConsolidadoGoaGov']['cuentac'])?$model->cuentac=$_POST['ConsolidadoGoaGov']['cuentac']:$model;
				isset($_POST['ConsolidadoGoaGov']['codigop'])?$model->codigop=$_POST['ConsolidadoGoaGov']['codigop']:$model;
				isset($_POST['ConsolidadoGoaGov']['codigoc'])?$model->codigoc=$_POST['ConsolidadoGoaGov']['codigoc']:$model;
				$model->Total=$model->calcularTotal($model->fecha_Inicio,
													$model->fecha_fin,
													$model->proveedorc!=''?Registrocontablegastos::model()->findId('proveedor',$model->codigop):'',
													$model->cuentac!=''?Registrocontablegastos::model()->findId('cuentapuc',$model->codigoc):'');
			}
			//$model->fecha_Inicio=$_POST['index']['fecha_Inicio'];
			
				$this->render('index',array(
			'model'=>$model,
		));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}