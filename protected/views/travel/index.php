<?php
/* @var $this TravelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Travels',
);

$this->menu=array(
	array('label'=>'Create Travel', 'url'=>array('create')),
	array('label'=>'Manage Travel', 'url'=>array('admin')),
);
?>

<?php
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
	    $('.search-form').toggle();
	    return false;
	});
	$('.search-form form').submit(function(){
	    $.fn.yiiListView.update('travellistview', { 
	        //this entire js section is taken from admin.php. w/only this line diff
	        data: $(this).serialize()
	    });
	    return false;
	});
");
?>

<h1>Travels</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'id'=>'travellistview',
	'sortableAttributes'=>array(
		'id',
		'nama_travel',
		'kategori_travel',
		'tanggal_event',
		'harga',
		'quota',
	),
)); ?>
