<?php
/* @var $this OrganizerController */
/* @var $model TravelOrganizer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'travel-organizer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_travel_organizer'); ?>
		<?php echo $form->textField($model,'nama_travel_organizer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_travel_organizer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pemilik'); ?>
		<?php echo $form->textField($model,'pemilik',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pemilik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_telp'); ?>
		<?php echo $form->textField($model,'no_telp',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'no_telp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi_perusahaan'); ?>
		<?php echo $form->textArea($model,'deskripsi_perusahaan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deskripsi_perusahaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_perusahaan'); ?>
		<?php echo $form->textField($model,'status_perusahaan'); ?>
		<?php echo $form->error($model,'status_perusahaan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->