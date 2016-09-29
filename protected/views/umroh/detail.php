<?php
/* @var $this UmrohController */
/* @var $model Umroh */

$this->breadcrumbs=array(
	'Umroh'=>array('index'),
	$model->judul,
);

$this->menu=array(
	array('label'=>'List Umroh', 'url'=>array('index')),
	array('label'=>'Create Umroh', 'url'=>array('create')),
	array('label'=>'Update Umroh', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Umroh', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Umroh', 'url'=>array('admin')),
);
?>

<h1>Detail Umroh #<?php echo $model->judul; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'kategori_travel',
			'value'=> $model->kategori->jenis_travel,
		),
        array(
			'label'=>'Pendamping',
			'value'=> ($model->id_pendamping) ? $model->pendamping->nama_pendamping : '' ,
		),
		array(
			'label'=>'Penerbangan',
			'value'=> ($model->id_penerbangan) ? $model->penerbangan->nama_penerbangan : '',
		),
		'judul',
		'desc',
		'jumlah_hari',
		'tanggal',
		'harga',
		'quota',
		'quota_active',
		array(
			'label'=>'gambar',
			'type'=>'html',
			'value'=> CHtml::image(Yii::app()->baseUrl."/images/umroh/".$model->gambar,'alt',array("width"=>"150px")),
		),
		'tanggal_post',
		'status_publish',
		'viewer',
	),
)); ?>

<?php
	if ($gallery) {
		foreach ($gallery as $item_gallery){
			echo CHtml::image(Yii::app()->baseUrl."/images/umroh_gallery/".$item_gallery->gambar,'alt',array("width"=>"150px"))." ";
		}
	}
	else {
		echo 'nothing';
	}
?>