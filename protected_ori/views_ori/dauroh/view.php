<?php
/* @var $this DaurohController */
/* @var $model Dauroh */

$this->breadcrumbs=array(
	'Dauroh'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Dauroh', 'url'=>array('index')),
	array('label'=>'Create Dauroh', 'url'=>array('create')),
	array('label'=>'Update Dauroh', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Dauroh', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dauroh', 'url'=>array('admin')),
);
?>

<h1>View Dauroh #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(
			'name'=>'kategori_travel',
			'value'=> $model->kategori->jenis_travel,
		),
		'judul',
		'title_slug',
		'desc',
		'lokasi',
		'tanggal_berangkat',
		array(
			'label'=>'Pendamping',
			'value'=> ($model->id_pendamping) ? $model->pendamping->nama_pendamping : '' ,
		),
		'harga',
		'quota',
		'quota_active',
		array(
			'label'=>'gambar',
			'type'=>'html',
			'value'=> CHtml::image(Yii::app()->baseUrl."/images/dauroh/".$model->gambar,'alt',array("width"=>"150px")),
		),
		'tanggal_post',
		'status_publish',
		'viewer',
	),
)); ?>

<?php
	if ($gallery) {
		foreach ($gallery as $item_gallery){
			echo CHtml::image(Yii::app()->baseUrl."/images/dauroh_gallery/".$item_gallery->gambar,'alt',array("width"=>"150px"))." ";
		}
	}
	else {
		echo 'nothing';
	}
?>