<?php

class FrenteaprovechamientoproductosController extends Controller
{
	public function actionAdmin()
	{
		$this->render('admin');
	}

	
	public function actionCreate($id)
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
	    $model->id_FrenteAprovechamiento=$id;
	    if(isset($_POST['Frenteaprovechamientoproductos']))
	    {
	        $model->attributes=$_POST['Frenteaprovechamientoproductos'];

	        if($model->validate())
	        {
	            if($model->save()){
	            	$this->redirect(array('create','id'=>$id));
	            }
				
			}
	            // form inputs are valid, do something here
	            return;
	        }
	   
	    $this->render('create',array('model'=>$model));
	} 

	public function actionDelete($id)
	{

		//$this->render('delete');
		$this->loadModel($id)->delete();
		
		//if(!isset($_GET['ajax']))
		//	$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
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

    if(isset($_POST['Frenteaprovechamientoproductos']))
    {
        $model->attributes=$_POST['Frenteaprovechamientoproductos'];
        if($model->id_FrenteAprovechamiento!=''){
        	$this->redirect(array('create','id'=>$model->id_FrenteAprovechamiento));
        }

    }
    $this->render('index',array('model'=>$model));
}

	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$this->render('update',$model);
	}

	public function actionView()
	{
		$this->render('view');
	}
	public function loadModel($id)
	{
		$model=Frenteaprovechamientoproductos::model()->findByPk($id);
		
		
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