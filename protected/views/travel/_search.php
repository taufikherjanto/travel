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
		<?php echo $form->label($model,'nama_travel'); ?>
		<?php echo $form->textField($model,'nama_travel',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori_travel'); ?>
		<?php echo $form->dropdownList(
			$model, 'kategori_travel',
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
		<?php echo $form->label($model,'id_ustad'); ?>
		<?php echo $form->dropdownList(
			$model, 'id_ustad',
			CHtml::listData(Ustad::model()->findAll(), 'id', 'nama_ustad'),
			array('empty'=>'Pilih Ustad')
		); ?>
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