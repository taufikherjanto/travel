<?php
/* @var $this ProductController */
/* @var $model Travel */

$this->breadcrumbs=array(
	'Travels'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Travel', 'url'=>array('index')),
	array('label'=>'Create Travel', 'url'=>array('create')),
	array('label'=>'Update Travel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Travel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Travel', 'url'=>array('admin')),
);
?>

<h1>View Travel #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_travel',
		'title_slug',
		'kategori_travel',
		'id_travel_organizer',
		'id_ustad',
		'deskripsi',
		'tanggal_event',
		'harga',
		'quota',
		'gambar',
		'tanggal_post',
		'status_publish',
		'viewer',
	),
)); ?>
