<?php
/* @var $this OrderController */
/* @var $model OrderMaster */

$this->breadcrumbs=array(
	'Order Masters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrderMaster', 'url'=>array('index')),
	array('label'=>'Create OrderMaster', 'url'=>array('create')),
	array('label'=>'View OrderMaster', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OrderMaster', 'url'=>array('admin')),
);
?>

<h1>Update OrderMaster <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>