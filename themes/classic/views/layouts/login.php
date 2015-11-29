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
	<!-- Latest compiled and minified CSS -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<link href="<?php echo Yii::app()->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl ?>/css/default.css" rel="stylesheet">	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
	<body>
		<header class="container-fluid bodycolor">		
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4 text-center">
					<br />
					<br />
					<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
					<br />
				</div>
				<div class="col-md-4"></div>
			</div>
		</header>
		<br />
		<!-- header -->	
		<section class="container-fluid">
			
			<div class="col-md-4"></div>
			<contenido class="col-md-4 text-center modal-content">	
				<?php echo $content; ?>
			</contenido>	
			<div class="col-md-4"></div>	
		</section>	
		<!-- container -->	
	</body>
	<br />
<div class="clear"></div>

	<div id="footer" class="bodycolor">
		<br />
		Copyright &copy; <?php echo date('Y'); ?> Darwin Pachón Ortiz<br/>
		Todos los derechos Reservados.<br/>	
	</div><!-- footer -->

</div><!-- page -->
<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/jquery.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl ?>/js/bootstrap.min.js"></script>
</html>