<?php
/* @var $this KategoriController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Travel Kategoris',
);

$this->menu=array(
	array('label'=>'Create TravelKategori', 'url'=>array('create')),
	array('label'=>'Manage TravelKategori', 'url'=>array('admin')),
);
?>

<h1>Travel Kategoris</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
