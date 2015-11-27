<?php

class RegistrocontablegastosController extends Controller
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
				'actions'=>array('index','view','SelectcodigoProveedor'),
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
		$model=new Registrocontablegastos;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);
		//if($_POST['Registrocontablegastos']===null){
			
		//}
		
		if(isset($_POST['Registrocontablegastos']))
		{

			if (($_POST['Registrocontablegastos']['Proveedor_idProveedor']!=='')&&($_POST['Registrocontablegastos']['CuentaPuc_idCuentaPuc']!=='')) {
			$_POST['Registrocontablegastos']['Proveedor_idProveedor']=$model->findId('proveedor',$_POST['Registrocontablegastos']['cproveedor']);
			$_POST['Registrocontablegastos']['CuentaPuc_idCuentaPuc']=$model->findId('cuentapuc',$_POST['Registrocontablegastos']['ccuenta']);
			
			}
			
			$model->attributes=$_POST['Registrocontablegastos'];
			
			if($model->save())
				$this->redirect(array('view','id'=>$model->idRegistroContableGastos));
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
		//$_POST['Registrocontablegastos']['Proveedor_idProveedor']=$model->obtenerUnCodigoNombre('proveedor',$model->Proveedor_idProveedor);
		//$_POST['Registrocontablegastos']['CuentaPuc_idCuentaPuc']=$model->obtenerUnCodigoNombre('cuentapuc',$model->CuentaPuc_idCuentaPuc);
		

		if(isset($_POST['Registrocontablegastos'])) 
		{
			
			if (($_POST['Registrocontablegastos']['Proveedor_idProveedor']!=='')&&($_POST['Registrocontablegastos']['CuentaPuc_idCuentaPuc']!==''))
			{
				$_POST['Registrocontablegastos']['Proveedor_idProveedor']=$model->findId('proveedor',$_POST['Registrocontablegastos']['cproveedor']);
				$_POST['Registrocontablegastos']['CuentaPuc_idCuentaPuc']=$model->findId('cuentapuc',$_POST['Registrocontablegastos']['ccuenta']);
			}
			$model->attributes=$_POST['Registrocontablegastos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idRegistroContableGastos));
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
		$dataProvider=new CActiveDataProvider('Registrocontablegastos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Registrocontablegastos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Registrocontablegastos']))
			$model->attributes=$_GET['Registrocontablegastos'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Registrocontablegastos the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Registrocontablegastos::model()->findByPk($id);
		$model->cproveedor=$model->obtenerCodigo('proveedor',$model->Proveedor_idProveedor);
		$model->ccuenta=$model->obtenerCodigo('cuentapuc',$model->CuentaPuc_idCuentaPuc);
		$model->Proveedor_idProveedor=$model->obtenerUnCodigoNombre('proveedor',$model->Proveedor_idProveedor);
		$model->CuentaPuc_idCuentaPuc=$model->obtenerUnCodigoNombre('cuentapuc',$model->CuentaPuc_idCuentaPuc);
		
		
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Registrocontablegastos $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='registrocontablegastos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function actionSelectcodigoproveedor()
	{
		$id=$_POST['Registrocontablegastos']['nombre_Proveedor'];
		$lista=Proveedor::model()->findAll('nombre_Proveedor=codigo_Proveedor',array(':codigo_Proveedor'=>$codigo_Proveedor));
		$lista=CHtml::ListsData($lista,'codigoProveedor','codigoProveedor');

		foreach ($lista as $valor => $codigoProveedor) 
		{
			echo CHtml::tag('codigoProveedor',array('value'=>$valor),CHtml::encode('codigoProveedor'),true);
		}

		


	}
}
