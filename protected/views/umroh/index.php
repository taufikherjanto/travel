<?php
/* @var $this UmrohController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Umroh',
);

$this->menu=array(
	array('label'=>'Create Umroh', 'url'=>array('create')),
	array('label'=>'Manage Umroh', 'url'=>array('admin')),
);
?>

<h1>Umrohs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
