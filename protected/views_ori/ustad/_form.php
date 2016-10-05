<?php
/* @var $this UstadController */
/* @var $model Ustad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ustad-form',
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
		<?php echo $form->labelEx($model,'nama_ustad'); ?>
		<?php echo $form->textField($model,'nama_ustad',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_ustad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi_ustad'); ?>
		<?php echo $form->textArea($model,'deskripsi_ustad',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deskripsi_ustad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->fileField($model,'foto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->