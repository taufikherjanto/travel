<?php
/* @var $this UmrohController */
/* @var $model Umroh */

$this->breadcrumbs=array(
	'Umroh'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Umroh', 'url'=>array('index')),
	array('label'=>'Create Umroh', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#umroh-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Umrohs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'umroh-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		//'id_kategori',
		array(
			'name'=>'pendamping_search',
			'value'=>'$data->pendamping->nama_pendamping',
			'filter'=>CHtml::DropdownList(
				'Umroh[id_pendamping]',
				$model->id_pendamping,
				CHtml::listData(Pendamping::model()->findAll(), 'id', 'nama_pendamping'),
				array('empty'=>'Pilih Pendamping')
			)
		),
		array(
			'name'=>'penerbangan_search',
			'value'=>'$data->penerbangan->nama_penerbangan',
			'filter'=>CHtml::DropdownList(
				'Umroh[id_penerbangan]',
				$model->id_penerbangan,
				CHtml::listData(Penerbangan::model()->findAll(), 'id', 'nama_penerbangan'),
				array('empty'=>'Pilih Penerbangan')
			)
		),
		'judul',
		//'title_slug',
		'desc',
		'jumlah_hari',
		'tanggal',
		'harga',
		'quota',
		/*
		'quota_active',
		'gambar',
		'tanggal_post',
		'status_publish',
		'viewer',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
