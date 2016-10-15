<?php
/* @var $this OrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Order Masters',
);

$this->menu=array(
	array('label'=>'Create OrderMaster', 'url'=>array('create')),
	array('label'=>'Manage OrderMaster', 'url'=>array('admin')),
);
?>

<h1>Order Masters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
