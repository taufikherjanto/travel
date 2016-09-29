<?php
/* @var $this RegionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Region',
);

$this->menu=array(
	array('label'=>'Create Region', 'url'=>array('create')),
	array('label'=>'Manage Region', 'url'=>array('admin')),
);
?>

<h1>Region</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
