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
		<?php echo $form->labelEx($model,'judul'); ?>
		<?php echo $form->textField($model,'judul',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'judul'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_region'); ?>
		<?php echo $form->dropdownList(
			$model, 'id_region',
			CHtml::listData(Region::model()->findAll(), 'id', 'nama_region'),
			array('empty'=>'Pilih Region')
		); ?>
		<?php echo $form->error($model,'id_region'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_negara'); ?><?php echo $form->dropdownList(
			$model, 'id_negara',
			CHtml::listData(Negara::model()->findAll(), 'id', 'nama_negara'),
			array('empty'=>'Pilih Negara')
		); ?>
		<?php echo $form->error($model,'id_negara'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tema'); ?>
		<?php echo $form->textField($model,'tema',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tema'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc'); ?>
		<?php echo $form->textArea($model,'desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desc'); ?>
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