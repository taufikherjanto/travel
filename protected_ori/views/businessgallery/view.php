<?php
/* @var $this BusinessgalleryController */
/* @var $model BusinessGallery */

$this->breadcrumbs=array(
	'Business Galleries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BusinessGallery', 'url'=>array('index')),
	array('label'=>'Create BusinessGallery', 'url'=>array('create')),
	array('label'=>'Update BusinessGallery', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BusinessGallery', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BusinessGallery', 'url'=>array('admin')),
);
?>

<h1>View BusinessGallery #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'gambar',
		'gambar_id',
	),
)); ?>
