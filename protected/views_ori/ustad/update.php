<?php
/* @var $this UstadController */
/* @var $model Ustad */

$this->breadcrumbs=array(
	'Ustads'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ustad', 'url'=>array('index')),
	array('label'=>'Create Ustad', 'url'=>array('create')),
	array('label'=>'View Ustad', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ustad', 'url'=>array('admin')),
);
?>

<h1>Update Ustad <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>