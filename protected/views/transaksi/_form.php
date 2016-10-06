<?php
/* @var $this TransaksiController */
/* @var $model OrderMaster */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-master-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'id_user_ref'); ?>
		<?php echo $form->textField($model,'id_user_ref'); ?>
		<?php echo $form->error($model,'id_user_ref'); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'id_travel'); ?>
		<?php echo $form->textField($model,'id_travel'); ?>
		<?php echo $form->error($model,'id_travel'); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'id_kategori_travel'); ?>
		<?php echo $form->textField($model,'id_kategori_travel'); ?>
		<?php echo $form->error($model,'id_kategori_travel'); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'id_type_payment'); ?>
		<?php echo $form->textField($model,'id_type_payment'); ?>
		<?php echo $form->error($model,'id_type_payment'); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'payment'); ?>
		<?php echo $form->textField($model,'payment', array('class'=>'form-control')); ?>
		<?php echo $form->error($model,'payment'); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'payment_code'); ?>
		<?php echo $form->textField($model,'payment_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'payment_code'); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'verifikasi_code'); ?>
		<?php echo $form->textField($model,'verifikasi_code',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'verifikasi_code'); ?>
	</div>

	<div class="row form-group">
		<?php echo $form->labelEx($model,'status_payment'); ?>
		<?php echo $form->textField($model,'status_payment'); ?>
		<?php echo $form->error($model,'status_payment'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Order' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->