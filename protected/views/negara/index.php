<?php
/* @var $this NegaraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Negaras',
);

$this->menu=array(
	array('label'=>'Create Negara', 'url'=>array('create')),
	array('label'=>'Manage Negara', 'url'=>array('admin')),
);
?>

<h1>Negaras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
