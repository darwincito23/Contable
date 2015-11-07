<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>


<body>
	<div class="container">
		<div class="col-md-1"></div>
		<div class="col-md-10 texto">
			<?php		
			$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array(
				'class'=>'nav nav-pills',				
				),
			));	
			?>
			<?php echo $content; ?>	
			<?php $this->endContent(); ?>
		</div>
		<div class="col-md-1"></div>
	</div>	
</body>
	

