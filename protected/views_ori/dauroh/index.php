<?php
/* @var $this DaurohController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dauroh',
);

$this->menu=array(
	array('label'=>'Create Dauroh', 'url'=>array('create')),
	array('label'=>'Manage Dauroh', 'url'=>array('admin')),
);
?>

<h1>Daurohs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
