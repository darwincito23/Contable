<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
	
	<div class="container">
		<div class="row-fluyd">
			<div class="span12">
		
		<?php  
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'nav nav-pills'),
		));
		?>		
			</div>

		</div>
		<dov class="row-fluyd">
			<div class="span12">
			<?php echo $content; ?>		
			</div>
		</dov>

	</div>
		

	
	

<?php $this->endContent(); ?>