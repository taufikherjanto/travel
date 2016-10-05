<?php
/* @var $this KategoriController */
/* @var $model TravelKategori */

$this->breadcrumbs=array(
	'Travel Kategoris'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TravelKategori', 'url'=>array('index')),
	array('label'=>'Create TravelKategori', 'url'=>array('create')),
	array('label'=>'View TravelKategori', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TravelKategori', 'url'=>array('admin')),
);
?>

<h1>Update TravelKategori <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>