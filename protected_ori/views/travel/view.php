<?php
/* @var $this TravelController */
/* @var $model Travel */

$this->breadcrumbs=array(
	'Travels'=>array('index'),
	$model->judul,
);

$this->menu=array(
	array('label'=>'List Travel', 'url'=>array('index')),
	array('label'=>'Create Travel', 'url'=>array('create')),
	array('label'=>'Update Travel', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Travel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Travel', 'url'=>array('admin')),
);
?>

<h1>View Travel #<?php echo $model->judul; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'judul',
		array(
			'name'=>'kategori_travel',
			'value'=> $model->kategori->jenis_travel,
		),
		array(
			'label'=>'Region',
			'value'=> ($model->id_region) ? $model->region->nama_region : '' ,
		),
		array(
			'label'=>'Negara',
			'value'=> ($model->id_negara) ? $model->negara->nama_negara : '',
		),
		'tema',
		'desc',
		'tanggal_event',
		'harga',
		'quota',
		'gambar',
		array(
			'label'=>'gambar',
			'type'=>'html',
			'value'=> CHtml::image(Yii::app()->baseUrl."/images/travel/".$model->gambar,'alt',array("width"=>"150px")),
		),
		'tanggal_post',
		'status_publish',
		'viewer',
	),
)); ?>

<?php
	if ($gallery) {
		foreach ($gallery as $item_gallery){
			echo CHtml::image(Yii::app()->baseUrl."/images/gallery/".$item_gallery->gambar,'alt',array("width"=>"150px"))." ";
		}
	}
	else {
		echo 'nothing';
	}
?>