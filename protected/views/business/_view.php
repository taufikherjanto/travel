<?php
/* @var $this BusinessController */
/* @var $data Business */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kategori')); ?>:</b>
	<?php echo CHtml::encode($data->id_kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::encode($data->judul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_slug')); ?>:</b>
	<?php echo CHtml::encode($data->title_slug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pendamping')); ?>:</b>
	<?php echo CHtml::encode($data->pendamping); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jumlah_hari')); ?>:</b>
	<?php echo CHtml::encode($data->jumlah_hari); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('penerbangan')); ?>:</b>
	<?php echo CHtml::encode($data->penerbangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quota')); ?>:</b>
	<?php echo CHtml::encode($data->quota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quota_active')); ?>:</b>
	<?php echo CHtml::encode($data->quota_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gambar')); ?>:</b>
	<?php echo CHtml::encode($data->gambar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_post')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_publish')); ?>:</b>
	<?php echo CHtml::encode($data->status_publish); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viewer')); ?>:</b>
	<?php echo CHtml::encode($data->viewer); ?>
	<br />

	*/ ?>

</div>