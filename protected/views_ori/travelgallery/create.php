<?php
/* @var $this TravelgalleryController */
/* @var $model TravelGallery */

$this->breadcrumbs=array(
	'Travel Galleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TravelGallery', 'url'=>array('index')),
	array('label'=>'Manage TravelGallery', 'url'=>array('admin')),
);
?>

<h1>Create TravelGallery</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>