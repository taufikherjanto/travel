<?php
/* @var $this OrganizerController */
/* @var $model TravelOrganizer */

$this->breadcrumbs=array(
	'Travel Organizers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TravelOrganizer', 'url'=>array('index')),
	array('label'=>'Manage TravelOrganizer', 'url'=>array('admin')),
);
?>

<h1>Create TravelOrganizer</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>