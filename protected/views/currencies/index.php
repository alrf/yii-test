<?php
/* @var $this CurrenciesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Currencies',
);

$this->menu=array(
	array('label'=>'Create Currencies', 'url'=>array('create')),
	//array('label'=>'Manage Currencies', 'url'=>array('admin')),
);
?>

<h3>Currencies</h3>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array(
		'header'         => '',
		'firstPageLabel' => '&lt;&lt;',
		'prevPageLabel'  => '&lt;',
		'nextPageLabel'  => '&gt;',
		'lastPageLabel'  => '&gt;&gt;',
	),
	'pagerCssClass'=>'pagination',
)); ?>
