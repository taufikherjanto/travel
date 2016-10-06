<?php
/* @var $this TransaksiController */
/* @var $model OrderMaster */

$this->breadcrumbs=array(
	'Order Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderMaster', 'url'=>array('index')),
	array('label'=>'Manage OrderMaster', 'url'=>array('admin')),
);
?>

<h1>Create OrderMaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>