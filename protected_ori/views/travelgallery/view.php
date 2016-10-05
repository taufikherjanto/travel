<?php
/* @var $this TravelgalleryController */
/* @var $model TravelGallery */

$this->breadcrumbs=array(
	'Travel Galleries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TravelGallery', 'url'=>array('index')),
	array('label'=>'Create TravelGallery', 'url'=>array('create')),
	array('label'=>'Update TravelGallery', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TravelGallery', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TravelGallery', 'url'=>array('admin')),
);
?>

<h1>View TravelGallery #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_travel',
		'gambar',
	),
)); ?>
