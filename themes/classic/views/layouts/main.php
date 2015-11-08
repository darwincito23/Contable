<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<link href="<?php echo Yii::app()->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl ?>/css/default.css" rel="stylesheet">


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="container-fluid">

<div class="container" id="page">

		<header class="container-fluid">	
			
			<div class="row">				
				<div class="col-md-12 menu">
						<div id="mainmenu">
								<?php $this->widget('zii.widgets.CMenu',array(
								'encodeLabel'=>false,
								'items'=>array(
								array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/logo.png" />'),	
								array('label'=>'Inicio', 'url'=>array('/site/home')),
								array('label'=>'GOA', 'url'=>array('/site/goa')),
								array('label'=>'GOV', 'url'=>array('/site/gov')),
								array('label'=>'ECPV', 'url'=>array('/site/ecpv')),					
								array('label'=>'Administrar Terceros', 'url'=>array('/proveedor/admin')),
								array('label'=>'Administrar Cuentas PUC', 'url'=>array('/cuentaPuc/admin')),											
								array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
								),
								)); ?>
						</div><!-- mainmenu -->
				</div>
			</div>
			<div class="row">
				
				<div class="col-md-10">
					<?php if(isset($this->breadcrumbs)):?>
					<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
					<?php endif?>
				</div>
				<div class="col-md-2"></div>
			</div>
		</header><!-- header -->		

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Distriguaduas S.A.S.<br/>
		Todos los derechos reservados.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
