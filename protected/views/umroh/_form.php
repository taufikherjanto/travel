<?php
/* @var $this UmrohController */
/* @var $model Umroh */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'umroh-form',
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
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc'); ?>
		<?php echo $form->textArea($model,'desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pendamping'); ?>
		<?php echo $form->dropdownList(
			$model, 'id_pendamping',
			CHtml::listData(Pendamping::model()->findAll(), 'id', 'nama_pendamping'),
			array('empty'=>'Pilih Pendamping')
		); ?>
		<?php echo $form->error($model,'id_pendamping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_penerbangan'); ?>
		<?php echo $form->dropdownList(
			$model, 'id_penerbangan',
			CHtml::listData(Penerbangan::model()->findAll(), 'id', 'nama_penerbangan'),
			array('empty'=>'Pilih Penerbangan')
		); ?>
		<?php echo $form->error($model,'id_penerbangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_hari'); ?>
		<?php echo $form->textField($model,'jumlah_hari',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jumlah_hari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'harga'); ?>
		<?php echo $form->textField($model,'harga',array('size'=>60,'maxlength'=>255)); ?>
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