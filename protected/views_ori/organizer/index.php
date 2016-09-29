<?php
/* @var $this OrganizerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Travel Organizer',
);

$this->menu=array(
	array('label'=>'Create TravelOrganizer', 'url'=>array('create')),
	array('label'=>'Manage TravelOrganizer', 'url'=>array('admin')),
);
?>

<h1>Travel Organizer</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
