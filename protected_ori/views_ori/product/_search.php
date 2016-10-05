<?php
/* @var $this ProductController */
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
		<?php echo $form->label($model,'title_slug'); ?>
		<?php echo $form->textField($model,'title_slug',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori_travel'); ?>
		<?php echo $form->textField($model,'kategori_travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_travel_organizer'); ?>
		<?php echo $form->textField($model,'id_travel_organizer'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_ustad'); ?>
		<?php echo $form->textField($model,'id_ustad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
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

	<div class="row">
		<?php echo $form->label($model,'gambar'); ?>
		<?php echo $form->textField($model,'gambar',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_post'); ?>
		<?php echo $form->textField($model,'tanggal_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_publish'); ?>
		<?php echo $form->textField($model,'status_publish'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viewer'); ?>
		<?php echo $form->textField($model,'viewer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->