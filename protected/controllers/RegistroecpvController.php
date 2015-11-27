<?php

class RegistroecpvController extends Controller
{
	

	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();
	}

	public function actionIndex()
	{
	    $model=new RegistroEcpv;
	    if(isset($_POST['RegistroEcpv']))
	    {
	        $model->attributes=$_POST['RegistroEcpv'];
	        $model->frenteA=$_POST['RegistroEcpv']['frenteA'];
	        if($model->frenteA!=''){
        	$this->redirect(array('crear','id'=>$model->frenteA));
       		 }
	    }
	    $this->render('index',array('model'=>$model));
	}
	
	public function actionCrear($id)
	{
	    $model=new RegistroEcpv;

	    // uncomment the following code to enable ajax-based validation
	    /*
	    if(isset($_POST['ajax']) && $_POST['ajax']==='registro-ecpv-crear-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	    */
		$model->frenteA=$id;
		 $model->costoParcial=$model->calcularTotal($id);
	    if(isset($_POST['RegistroEcpv']))
	    {
	        $model->attributes=$_POST['RegistroEcpv'];
	        if($model->validate())
	        {
	            // form inputs are valid, do something here
	        if ($model->save()) {
	        	$this->redirect(array('crear','id'=>$id));
	        }
	        }
	    }

	    $this->render('crear',array('model'=>$model));
	}

	public function actionUpdate()
	{
		$this->render('update');
	}

	public function actionView()
	{
		$this->render('view');
	}
	public function loadModel($id)
	{
		$model=RegistroEcpv::model()->findByPk($id);
		
		
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
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