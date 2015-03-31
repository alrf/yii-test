<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="span9">
	<div class="hero-unit">
	<?php echo $content; ?>
	</div><!-- content -->
</div>

<div class="span3">
	<div class="well sidebar-nav">

	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
			'htmlOptions'=>array('class'=>'nav-header'),
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions' => array( 'class' => 'nav nav-list'),
		));
		$this->endWidget();
	?>

	</div>
</div>
<?php $this->endContent(); ?>