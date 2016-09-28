<?php
/* @var $this NegaraController */
/* @var $model Negara */

$this->breadcrumbs=array(
	'Negaras'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Negara', 'url'=>array('index')),
	array('label'=>'Create Negara', 'url'=>array('create')),
	array('label'=>'Update Negara', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Negara', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Negara', 'url'=>array('admin')),
);
?>

<h1>View Negara #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_negara',
	),
)); ?>
