<?php
/* @var $this BusinessgalleryController */
/* @var $model BusinessGallery */

$this->breadcrumbs=array(
	'Business Galleries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BusinessGallery', 'url'=>array('index')),
	array('label'=>'Create BusinessGallery', 'url'=>array('create')),
	array('label'=>'View BusinessGallery', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BusinessGallery', 'url'=>array('admin')),
);
?>

<h1>Update BusinessGallery <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>