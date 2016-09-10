<?php
/* @var $this KategoriController */
/* @var $model TravelKategori */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'travel-kategori-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_travel'); ?>
		<?php echo $form->textField($model,'jenis_travel',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'jenis_travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_publish'); ?>
		<?php echo $form->textField($model,'status_publish'); ?>
		<?php echo $form->error($model,'status_publish'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->