<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="container-fluid">
	<header class="row">
		
		<div class="col-md-12">
			<?php
			$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'nav nav-pills'),
			));		
			?>
		</div>
					
	</header>
	<!-- end header -->

	<body class="row">
		
		<div class="col-md-12">
			<?php echo $content; ?>
			<?php $this->endContent(); ?>
		</div>
				
	</body>
	<!-- end body -->
</div>

