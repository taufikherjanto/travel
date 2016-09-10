<?php
/* @var $this TravelController */
/* @var $model Travel */

$this->breadcrumbs=array(
	'Travels'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Travel', 'url'=>array('index')),
	array('label'=>'Create Travel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#travel-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Travels</h1>

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
	'id'=>'travel-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'nullDisplay'=>'',
	'columns'=>array(
		'id',
		'nama_travel',
		array(
			'name'=>'kategori_search',
			'value'=>'$data->kategori->jenis_travel'
		),
		array(
			'name'=>'organizer_search',
			'value'=>'$data->organizer->nama_travel_organizer'
		),
		array(
			'name'=>'ustad_search',
			'value'=>'($data->ustad) ? $data->ustad->nama_ustad : ""',
		),
		'deskripsi',
		'tanggal_event',
		// 'harga',
		'quota',
		// 'gambar',
		// 'tanggal_post',
		'status_publish',
		'viewer',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
