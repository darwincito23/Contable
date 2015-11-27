<?php

class CuentapucController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		//var_dump($_POST);
		//yii::app()->end();
		
		//Instanciamos el modelo Cuentapuc
		$model=new Cuentapuc;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		//Validamos si existe un formulario de Cuentapuc
		if(isset($_POST['Cuentapuc']))
		{
			//validamos si el campo de la cuenta padre esta vacio, 
			//si es así se hace null ese campo y se insertan los demas campos
			if($_POST['Cuentapuc']['CuentaPadre']=='')
			{	

				$_POST['Cuentapuc']['CuentaPadre']=null;
				//setea todos los valores del modelo Cuentapuc
				$model->attributes=$_POST['Cuentapuc'];
				//validamos si se guardan los campos, si es así se renderiza la vista View
				if($model->save())
				$this->redirect(array('view','id'=>$model->idCuentaPuc));
			}
			else
			{
				//CuentaPadre=idCuentaPuc Buscar por Id en el modelo Cuentapuc el Prefijo que es el codigo de la cuenta padre (Codigo PUC)
				$_POST['Cuentapuc']['CuentaPadre']=$model->findId($_POST['Cuentapuc']['prefijo']);
				//codigoCuentaPuc=Prefijo+codigoCuentaPuc
				$_POST['Cuentapuc']['codigoCuentaPuc']=$_POST['Cuentapuc']['prefijo'].$_POST['Cuentapuc']['codigoCuentaPuc'];
				//setea todos los valores del modelo Cuentapuc
				$model->attributes=$_POST['Cuentapuc'];
				//validamos si se guardan los campos, si es así se renderiza la vista View
				if($model->save())
				$this->redirect(array('view','id'=>$model->idCuentaPuc));
			}

		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cuentapuc']))
		{
			if($_POST['Cuentapuc']['CuentaPadre']=='')
			{	

				$_POST['Cuentapuc']['CuentaPadre']=null;
			}else{

				$_POST['Cuentapuc']['CuentaPadre']=$model->findId($_POST['Cuentapuc']['prefijo']);
				$_POST['Cuentapuc']['codigoCuentaPuc']=$_POST['Cuentapuc']['prefijo'].$_POST['Cuentapuc']['codigoCuentaPuc'];
			}
			$model->attributes=$_POST['Cuentapuc'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idCuentaPuc));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Cuentapuc');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cuentapuc('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cuentapuc']))
			$model->attributes=$_GET['Cuentapuc'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cuentapuc the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Cuentapuc::model()->findByPk($id);
		if($model->CuentaPadre!=''){
		$model->prefijo=$model->obtenerCodigo($model->CuentaPadre);
		$model->CuentaPadre=$model->obtenerUnCodigoNombre($model->CuentaPadre);
			
		}
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cuentapuc $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cuentapuc-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
