<?php
/* @var $this PenerbanganController */
/* @var $model Penerbangan */

$this->breadcrumbs=array(
	'Penerbangans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Penerbangan', 'url'=>array('index')),
	array('label'=>'Manage Penerbangan', 'url'=>array('admin')),
);
?>

<h1>Create Penerbangan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>