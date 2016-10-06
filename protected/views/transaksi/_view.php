<?php
/* @var $this TransaksiController */
/* @var $data OrderMaster */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user_ref')); ?>:</b>
	<?php echo CHtml::encode($data->id_user_ref); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_travel')); ?>:</b>
	<?php echo CHtml::encode($data->id_travel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kategori_travel')); ?>:</b>
	<?php echo CHtml::encode($data->id_kategori_travel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_type_payment')); ?>:</b>
	<?php echo CHtml::encode($data->id_type_payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payment')); ?>:</b>
	<?php echo CHtml::encode($data->payment); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('payment_code')); ?>:</b>
	<?php echo CHtml::encode($data->payment_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('verifikasi_code')); ?>:</b>
	<?php echo CHtml::encode($data->verifikasi_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_payment')); ?>:</b>
	<?php echo CHtml::encode($data->status_payment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	*/ ?>

</div>