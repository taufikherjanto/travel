<?php
/* @var $this DaurohController */
/* @var $model Dauroh */

$this->breadcrumbs=array(
	'Daurohs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dauroh', 'url'=>array('index')),
	array('label'=>'Create Dauroh', 'url'=>array('create')),
	array('label'=>'View Dauroh', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Dauroh', 'url'=>array('admin')),
);
?>

<h1>Update Dauroh <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>