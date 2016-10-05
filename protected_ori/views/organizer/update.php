<?php
/* @var $this OrganizerController */
/* @var $model TravelOrganizer */

$this->breadcrumbs=array(
	'Travel Organizers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TravelOrganizer', 'url'=>array('index')),
	array('label'=>'Create TravelOrganizer', 'url'=>array('create')),
	array('label'=>'View TravelOrganizer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TravelOrganizer', 'url'=>array('admin')),
);
?>

<h1>Update TravelOrganizer <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>