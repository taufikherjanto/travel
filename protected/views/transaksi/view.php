<?php
/* @var $this TransaksiController */
/* @var $model OrderMaster */

$this->breadcrumbs=array(
	'Order Masters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OrderMaster', 'url'=>array('index')),
	array('label'=>'Create OrderMaster', 'url'=>array('create')),
	array('label'=>'Update OrderMaster', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OrderMaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrderMaster', 'url'=>array('admin')),
);
?>

<h1>View OrderMaster #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'id_user_ref',
		'id_travel',
		'id_kategori_travel',
		'id_type_payment',
		'payment',
		'payment_code',
		'verifikasi_code',
		'status_payment',
		'created_date',
		'last_update',
	),
)); ?>
