<?php
/* @var $this UstadController */
/* @var $model Ustad */

$this->breadcrumbs=array(
	'Ustads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ustad', 'url'=>array('index')),
	array('label'=>'Manage Ustad', 'url'=>array('admin')),
);
?>

<h1>Create Ustad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>