<?php
/* @var $this OrganizerController */
/* @var $model TravelOrganizer */

$this->breadcrumbs=array(
	'Travel Organizers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TravelOrganizer', 'url'=>array('index')),
	array('label'=>'Create TravelOrganizer', 'url'=>array('create')),
	array('label'=>'Update TravelOrganizer', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TravelOrganizer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TravelOrganizer', 'url'=>array('admin')),
);
?>

<h1>View TravelOrganizer #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_travel_organizer',
		'pemilik',
		'no_telp',
		'email',
		'alamat',
		'deskripsi_perusahaan',
		'status_perusahaan',
	),
)); ?>
