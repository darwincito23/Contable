<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	
	public function accessRules() {
    return array(
        array('allow',
            'actions' => array('home', 'homecpv', 'login','gov','goa','ecpv'),
            'users' => array('*'),
        ),
        array('deny',
            'users' => array('*'),
        ),
    );
	}
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->layout="Login";
	    $model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect('index.php/site/home');
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}
	
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	public function actionHome()
	{
		$this->render('home');
	}

	/**
	 * Displays the contact page
	 */
	public function actionGov()
	{
		$this->render('gov');
	}
	
	/**
	 * Displays the contact page
	 */
	public function actionGoa()
	{
		$this->render('goa');
	}

	public function actionEcpv()
	{
		$this->render('ecpv');
	}

	public function actionHomecpv()
	{
		$this->render('homecpv');
	}

	/**
	 * Displays the login page
	 */
	

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}