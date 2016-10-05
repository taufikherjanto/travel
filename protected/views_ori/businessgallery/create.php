<?php
/* @var $this BusinessgalleryController */
/* @var $model BusinessGallery */

$this->breadcrumbs=array(
	'Business Galleries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BusinessGallery', 'url'=>array('index')),
	array('label'=>'Manage BusinessGallery', 'url'=>array('admin')),
);
?>

<h1>Create BusinessGallery</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>