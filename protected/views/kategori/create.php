<?php
/* @var $this KategoriController */
/* @var $model TravelKategori */

$this->breadcrumbs=array(
	'Travel Kategoris'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TravelKategori', 'url'=>array('index')),
	array('label'=>'Manage TravelKategori', 'url'=>array('admin')),
);
?>

<h1>Create TravelKategori</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>