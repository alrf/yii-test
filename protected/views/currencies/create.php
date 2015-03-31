<?php
/* @var $this CurrenciesController */
/* @var $model Currencies */

$this->breadcrumbs=array(
	'Currencies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Currencies', 'url'=>array('index')),
);
?>

<h2>Create Currencies</h2>
Parsing will be start when you push 'Create' button..
<br/><br/>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>