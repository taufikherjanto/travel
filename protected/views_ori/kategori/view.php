<?php
/* @var $this KategoriController */
/* @var $model TravelKategori */

$this->breadcrumbs=array(
	'Travel Kategoris'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TravelKategori', 'url'=>array('index')),
	array('label'=>'Create TravelKategori', 'url'=>array('create')),
	array('label'=>'Update TravelKategori', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TravelKategori', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TravelKategori', 'url'=>array('admin')),
);
?>

<h1>View TravelKategori #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'jenis_travel',
		'status_publish',
	),
)); ?>
