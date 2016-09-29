<?php
/* @var $this DaurohController */
/* @var $model Dauroh */

$this->breadcrumbs=array(
	'Daurohs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Dauroh', 'url'=>array('index')),
	array('label'=>'Manage Dauroh', 'url'=>array('admin')),
);
?>

<h1>Create Dauroh</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>