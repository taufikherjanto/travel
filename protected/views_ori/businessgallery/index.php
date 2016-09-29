<?php
/* @var $this BusinessgalleryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Business Galleries',
);

$this->menu=array(
	array('label'=>'Create BusinessGallery', 'url'=>array('create')),
	array('label'=>'Manage BusinessGallery', 'url'=>array('admin')),
);
?>

<h1>Business Galleries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
