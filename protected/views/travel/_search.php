<?php
/* @var $this TravelController */
/* @var $model Travel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kategori'); ?>
		<?php echo $form->dropdownList(
			$model, 'id_kategori',
			CHtml::listData(TravelKategori::model()->findAll(), 'id', 'jenis_travel'),
			array('empty'=>'Pilih Kategori')
		); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_travel_organizer'); ?>
		<?php echo $form->dropdownList(
			$model, 'id_travel_organizer',
			CHtml::listData(TravelOrganizer::model()->findAll(), 'id', 'nama_travel_organizer'),
			array('empty'=>'Pilih Organizer')
		); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'region'); ?>
		<?php echo $form->textField($model,'region',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'negara'); ?>
		<?php echo $form->textField($model,'negara',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tema'); ?>
		<?php echo $form->textField($model,'tema',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_event'); ?>
		<?php echo $form->textField($model,'tanggal_event'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quota'); ?>
		<?php echo $form->textField($model,'quota'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->