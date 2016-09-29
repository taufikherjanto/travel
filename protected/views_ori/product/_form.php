<?php
/* @var $this ProductController */
/* @var $model Travel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'travel-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_travel'); ?>
		<?php echo $form->textField($model,'nama_travel',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_slug'); ?>
		<?php echo $form->textField($model,'title_slug',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_slug'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori_travel'); ?>
		<?php echo $form->textField($model,'kategori_travel'); ?>
		<?php echo $form->error($model,'kategori_travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_travel_organizer'); ?>
		<?php echo $form->textField($model,'id_travel_organizer'); ?>
		<?php echo $form->error($model,'id_travel_organizer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ustad'); ?>
		<?php echo $form->textField($model,'id_ustad'); ?>
		<?php echo $form->error($model,'id_ustad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_event'); ?>
		<?php echo $form->textField($model,'tanggal_event'); ?>
		<?php echo $form->error($model,'tanggal_event'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga'); ?>
		<?php echo $form->error($model,'harga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quota'); ?>
		<?php echo $form->textField($model,'quota'); ?>
		<?php echo $form->error($model,'quota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo $form->textField($model,'gambar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'gambar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_post'); ?>
		<?php echo $form->textField($model,'tanggal_post'); ?>
		<?php echo $form->error($model,'tanggal_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_publish'); ?>
		<?php echo $form->textField($model,'status_publish'); ?>
		<?php echo $form->error($model,'status_publish'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viewer'); ?>
		<?php echo $form->textField($model,'viewer'); ?>
		<?php echo $form->error($model,'viewer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->