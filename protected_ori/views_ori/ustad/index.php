<?php
/* @var $this UstadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ustads',
);

$this->menu=array(
	array('label'=>'Create Ustad', 'url'=>array('create')),
	array('label'=>'Manage Ustad', 'url'=>array('admin')),
);
?>

<h1>Ustads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
