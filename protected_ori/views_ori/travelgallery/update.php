<?php
/* @var $this TravelgalleryController */
/* @var $model TravelGallery */

$this->breadcrumbs=array(
	'Travel Galleries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TravelGallery', 'url'=>array('index')),
	array('label'=>'Create TravelGallery', 'url'=>array('create')),
	array('label'=>'View TravelGallery', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TravelGallery', 'url'=>array('admin')),
);
?>

<h1>Update TravelGallery <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>