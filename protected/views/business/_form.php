<?php
/* @var $this BusinessController */
/* @var $model Business */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'business-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_kategori'); ?>
		<?php echo $form->textField($model,'id_kategori'); ?>
		<?php echo $form->error($model,'id_kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_slug'); ?>
		<?php echo $form->textField($model,'title_slug',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_slug'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc'); ?>
		<?php echo $form->textArea($model,'desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pendamping'); ?>
		<?php echo $form->textField($model,'pendamping',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pendamping'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jumlah_hari'); ?>
		<?php echo $form->textField($model,'jumlah_hari',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jumlah_hari'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penerbangan'); ?>
		<?php echo $form->textField($model,'penerbangan'); ?>
		<?php echo $form->error($model,'penerbangan'); ?>
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
		<?php echo $form->labelEx($model,'quota_active'); ?>
		<?php echo $form->textField($model,'quota_active'); ?>
		<?php echo $form->error($model,'quota_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gambar'); ?>
		<?php echo $form->textField($model,'gambar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'gambar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_post'); ?>
		<?php echo $form->textField($model,'tanggal_post',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tanggal_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_publish'); ?>
		<?php echo $form->textField($model,'status_publish'); ?>
		<?php echo $form->error($model,'status_publish'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viewer'); ?>
		<?php echo $form->textField($model,'viewer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'viewer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->