<?php
/* @var $this PenerbanganController */
/* @var $model Penerbangan */

$this->breadcrumbs=array(
	'Penerbangans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Penerbangan', 'url'=>array('index')),
	array('label'=>'Create Penerbangan', 'url'=>array('create')),
	array('label'=>'View Penerbangan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Penerbangan', 'url'=>array('admin')),
);
?>

<h1>Update Penerbangan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>