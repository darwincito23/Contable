<?php

class FrenteaprovechamientoproductosController extends Controller
{
	/**
	 * [actionCreate description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
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

	public function actionUpdate($id)
	{
		//var_dump($_POST);
		//yii::app()->end();
		$model=$this->loadModel($id);
 		
	    if(isset($_POST['Frenteaprovechamientoproductos']))
	    {
	         $model->attributes=$_POST['Frenteaprovechamientoproductos'];	    	
	         if($model->save())
	         {
	            $this->redirect(array('frenteaprovechamientoproductos/create/'.$model->id_FrenteAprovechamiento));
	         }				
			
	        }
	   
	    $this->render('update',array('model'=>$model));
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
	    //Se crea el objeto $model de tipo FrenteaprovechamientoProductos 
	    $model=new FrenteaprovechamientoProductos;

	    // uncomment the following code to enable ajax-based validation
	    /*
	    if(isset($_POST['ajax']) && $_POST['ajax']==='frenteaprovechamiento-productos-index-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	    */
	    //Decisión que valida si existe una petición POST de Frenteaprovechamientoproductos
	    if(isset($_POST['Frenteaprovechamientoproductos']))
	    {
	        //sentencia que captura todos los atributos del modelo.
	        $model->attributes=$_POST['Frenteaprovechamientoproductos'];
	        //Desición que valida si la variable id_FrenteAprovechamiento es diferente de vacio
	        //si es así redirecciona a la vista create cargando el parámetro id_FrenteAprovechamiento.
	        if($model->id_FrenteAprovechamiento!='')
	        {
	        	$this->redirect(array('create','id'=>$model->id_FrenteAprovechamiento));
	        }
	    }
	    $this->render('index',array('model'=>$model));
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