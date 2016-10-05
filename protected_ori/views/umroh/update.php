<?php
/* @var $this UmrohController */
/* @var $model Umroh */

$this->breadcrumbs=array(
	'Umroh'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Umroh', 'url'=>array('index')),
	array('label'=>'Create Umroh', 'url'=>array('create')),
	array('label'=>'View Umroh', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Umroh', 'url'=>array('admin')),
);
?>

<h1>Update Umroh <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>