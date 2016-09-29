<?php
/* @var $this BusinessController */
/* @var $model Business */
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
		<?php echo $form->textField($model,'id_kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title_slug'); ?>
		<?php echo $form->textField($model,'title_slug',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'desc'); ?>
		<?php echo $form->textArea($model,'desc',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pendamping'); ?>
		<?php echo $form->textField($model,'pendamping',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah_hari'); ?>
		<?php echo $form->textField($model,'jumlah_hari',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'penerbangan'); ?>
		<?php echo $form->textField($model,'penerbangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'harga'); ?>
		<?php echo $form->textField($model,'harga',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quota'); ?>
		<?php echo $form->textField($model,'quota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quota_active'); ?>
		<?php echo $form->textField($model,'quota_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gambar'); ?>
		<?php echo $form->textField($model,'gambar',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_post'); ?>
		<?php echo $form->textField($model,'tanggal_post',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_publish'); ?>
		<?php echo $form->textField($model,'status_publish'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viewer'); ?>
		<?php echo $form->textField($model,'viewer',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->