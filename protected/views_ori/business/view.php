<?php
/* @var $this BusinessController */
/* @var $model Business */

$this->breadcrumbs=array(
    'Business'=>array('index'),
    $model->judul,
);

$this->menu=array(
    array('label'=>'List Business', 'url'=>array('index')),
    array('label'=>'Create Business', 'url'=>array('create')),
    array('label'=>'Update Business', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Business', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Business', 'url'=>array('admin')),
);
?>

<h1>View Business #<?php echo $model->id; ?></h1>

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
			'label'=>'Pendamping',
			'value'=> ($model->id_pendamping) ? $model->pendamping->nama_pendamping : '' ,
		),
		array(
			'label'=>'Penerbangan',
			'value'=> ($model->id_penerbangan) ? $model->penerbangan->nama_penerbangan : '',
		),
        'desc',
        'jumlah_hari',
        'tanggal',
        'harga',
        'quota',
        'quota_active',
        'gambar',
        array(
			'label'=>'gambar',
			'type'=>'html',
			'value'=> CHtml::image(Yii::app()->baseUrl."/images/business/".$model->gambar,'alt',array("width"=>"150px")),
		),
        'tanggal_post',
        'status_publish',
        'viewer',
    ),
)); ?>

<?php
	if ($gallery) {
		foreach ($gallery as $item_gallery){
			echo CHtml::image(Yii::app()->baseUrl."/images/business_gallery/".$item_gallery->gambar,'alt',array("width"=>"150px"))." ";
		}
	}
	else {
		echo 'nothing';
	}
?>