<?php
/* @var $this TravelController */
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
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_travel'); ?>
		<?php echo $form->textField($model,'nama_travel',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kategori_travel'); ?>
		<?php echo $form->dropdownList(
			$model, 'kategori_travel',
			CHtml::listData(TravelKategori::model()->findAll(), 'id', 'jenis_travel'),
			array('empty'=>'Pilih Kategori')
		); ?>
		<?php echo $form->error($model,'kategori_travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_travel_organizer'); ?>
		<?php echo $form->dropdownList(
			$model, 'id_travel_organizer',
			CHtml::listData(TravelOrganizer::model()->findAll(), 'id', 'nama_travel_organizer'),
			array('empty'=>'Pilih Organizer')
		); ?>
		<?php echo $form->error($model,'id_travel_organizer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_ustad'); ?>
		<?php echo $form->dropdownList(
			$model, 'id_ustad',
			CHtml::listData(Ustad::model()->findAll(), 'id', 'nama_ustad'),
			array('empty'=>'Pilih Ustad')
		); ?>
		<?php echo $form->error($model,'id_travel_organizer'); ?>
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
		<?php echo $form->fileField($model,'gambar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'gambar'); ?>

		<p class="tebal">gambar tambahan :</p>
		<?php for ($i=0; $i < 5; $i++) { ?>
			<div class="form-group">
				<p>Gambar <?php echo $i ?></p>
				<input type="file" name="file[]">
			</div>
		<?php } ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->