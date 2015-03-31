<?php
/* @var $this CurrenciesController */
/* @var $model Currencies */

$this->breadcrumbs=array(
	'Currencies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Currencies', 'url'=>array('index')),
	array('label'=>'Create Currencies', 'url'=>array('create')),
	//array('label'=>'Update Currencies', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Delete Currencies', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Currencies', 'url'=>array('admin')),
);
?>

<h3>View Currencies #<?php echo $model->id; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class' => 'table table-bordered','style' => 'background-color: #ffffff; font-size: 14px'),
	'attributes'=>array(
		'id',
		'chg_percent',
		'change',
		'name',
		'price',
		'symbol',
		'ts',
		'type',
		'utctime',
		'volume',
	),
)); ?>
