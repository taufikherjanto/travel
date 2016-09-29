<?php
/* @var $this UmrohController */
/* @var $model Umroh */

$this->breadcrumbs=array(
	'Umroh'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Umroh', 'url'=>array('index')),
	array('label'=>'Manage Umroh', 'url'=>array('admin')),
);
?>

<h1>Create Umroh</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>