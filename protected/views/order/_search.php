<?php
/* @var $this OrderController */
/* @var $model OrderMaster */
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
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user_ref'); ?>
		<?php echo $form->textField($model,'id_user_ref'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_travel'); ?>
		<?php echo $form->textField($model,'id_travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_kategori_travel'); ?>
		<?php echo $form->textField($model,'id_kategori_travel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_type_payment'); ?>
		<?php echo $form->textField($model,'id_type_payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment'); ?>
		<?php echo $form->textField($model,'payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payment_code'); ?>
		<?php echo $form->textField($model,'payment_code',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'verifikasi_code'); ?>
		<?php echo $form->textField($model,'verifikasi_code',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_payment'); ?>
		<?php echo $form->textField($model,'status_payment'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_konfirmasi'); ?>
		<?php echo $form->textField($model,'status_konfirmasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_update'); ?>
		<?php echo $form->textField($model,'last_update'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->