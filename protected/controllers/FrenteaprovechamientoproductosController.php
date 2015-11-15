<?php

class FrenteaprovechamientoproductosController extends Controller
{
	public function actionAdmin()
	{
		$this->render('admin');
	}

	
	public function actionCreate()
	{
	    $model=new FrenteaprovechamientoProductos;

	    // uncomment the following code to enable ajax-based validation
	    /*
	    if(isset($_POST['ajax']) && $_POST['ajax']==='frenteaprovechamiento-productos-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	    */

	    if(isset($_POST['FrenteaprovechamientoProductos']))
	    {
	        $model->attributes=$_POST['FrenteaprovechamientoProductos'];
	        if($model->validate())
	        {
	            // form inputs are valid, do something here
	            return;
	        }
	    }
	    $this->render('create',array('model'=>$model));
	} 

	public function actionDelete()
	{
		$this->render('delete');
	}

	public function actionIndex()
{
    $model=new FrenteaprovechamientoProductos;

    // uncomment the following code to enable ajax-based validation
    /*
    if(isset($_POST['ajax']) && $_POST['ajax']==='frenteaprovechamiento-productos-index-form')
    {
        echo CActiveForm::validate($model);
        Yii::app()->end();
    }
    */

    if(isset($_POST['FrenteaprovechamientoProductos']))
    {
        $model->attributes=$_POST['FrenteaprovechamientoProductos'];
        if($model->validate())
        {
            // form inputs are valid, do something here
            return;
        }
    }
    $this->render('index',array('model'=>$model));
}

	public function actionUpdate()
	{
		$this->render('update');
	}

	public function actionView()
	{
		$this->render('view');
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