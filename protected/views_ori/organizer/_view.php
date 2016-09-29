<?php
/* @var $this OrganizerController */
/* @var $data TravelOrganizer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_travel_organizer')); ?>:</b>
	<?php echo CHtml::encode($data->nama_travel_organizer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pemilik')); ?>:</b>
	<?php echo CHtml::encode($data->pemilik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_telp')); ?>:</b>
	<?php echo CHtml::encode($data->no_telp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi_perusahaan')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi_perusahaan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status_perusahaan')); ?>:</b>
	<?php echo CHtml::encode($data->status_perusahaan); ?>
	<br />

	*/ ?>

</div>