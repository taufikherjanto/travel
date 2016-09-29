<?php
/* @var $this PenerbanganController */
/* @var $model Penerbangan */

$this->breadcrumbs=array(
	'Penerbangans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Penerbangan', 'url'=>array('index')),
	array('label'=>'Create Penerbangan', 'url'=>array('create')),
	array('label'=>'Update Penerbangan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Penerbangan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Penerbangan', 'url'=>array('admin')),
);
?>

<h1>View Penerbangan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_penerbangan',
	),
)); ?>
