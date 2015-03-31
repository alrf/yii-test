<?php
/* @var $this CurrenciesController */
/* @var $data Currencies */
?>

<table class="table table-bordered" style="background-color: #ffffff; font-size: 14px">

	<tr><td><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</td><td>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	</td></tr>

	<tr><td><?php echo CHtml::encode($data->getAttributeLabel('chg_percent')); ?>:</td><td>
	<?php echo CHtml::encode($data->chg_percent); ?>
	</td></tr>

	<tr><td><?php echo CHtml::encode($data->getAttributeLabel('change')); ?>:</td><td>
	<?php echo CHtml::encode($data->change); ?>
	</td></tr>

	<tr><td><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</td><td>
	<?php echo CHtml::encode($data->name); ?>
	</td></tr>

	<tr><td><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</td><td>
	<?php echo CHtml::encode($data->price); ?>
	</td></tr>

	<tr><td><?php echo CHtml::encode($data->getAttributeLabel('symbol')); ?>:</td><td>
	<?php echo CHtml::encode($data->symbol); ?>
	</td></tr>

	<tr><td><?php echo CHtml::encode($data->getAttributeLabel('ts')); ?>:</td><td>
	<?php echo CHtml::encode($data->ts); ?>
	</td></tr>

	<?php /*
	<tr><td><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</td><td>
	<?php echo CHtml::encode($data->type); ?>
	</td></tr>

	<tr><td><?php echo CHtml::encode($data->getAttributeLabel('utctime')); ?>:</td><td>
	<?php echo CHtml::encode($data->utctime); ?>
	</td></tr>

	<tr><td><?php echo CHtml::encode($data->getAttributeLabel('volume')); ?>:</td><td>
	<?php echo CHtml::encode($data->volume); ?>
	</td></tr>

	*/ ?>

</table>