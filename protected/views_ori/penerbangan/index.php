<?php
/* @var $this PenerbanganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Penerbangan',
);

$this->menu=array(
	array('label'=>'Create Penerbangan', 'url'=>array('create')),
	array('label'=>'Manage Penerbangan', 'url'=>array('admin')),
);
?>

<h1>Penerbangan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
