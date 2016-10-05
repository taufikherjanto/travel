<?php
/* @var $this TravelgalleryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Travel Galleries',
);

$this->menu=array(
	array('label'=>'Create TravelGallery', 'url'=>array('create')),
	array('label'=>'Manage TravelGallery', 'url'=>array('admin')),
);
?>

<h1>Travel Galleries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
