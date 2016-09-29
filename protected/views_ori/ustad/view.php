<?php
/* @var $this UstadController */
/* @var $model Ustad */

$this->breadcrumbs=array(
	'Ustads'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ustad', 'url'=>array('index')),
	array('label'=>'Create Ustad', 'url'=>array('create')),
	array('label'=>'Update Ustad', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ustad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ustad', 'url'=>array('admin')),
);
?>

<h1>View Ustad #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_ustad',
		'deskripsi_ustad',
		array(
			'label'=>'foto',
			'type'=>'html',
			'value'=> CHtml::image(Yii::app()->baseUrl."/images/ustad/".$model->foto,$model->nama_ustad,array("width"=>"150px")),
		),
		'email',
	),
)); ?>
