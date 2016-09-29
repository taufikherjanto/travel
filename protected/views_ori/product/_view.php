<?php
/* @var $this ProductController */
/* @var $data Travel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_travel')); ?>:</b>
	<?php echo CHtml::encode($data->nama_travel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_slug')); ?>:</b>
	<?php echo CHtml::encode($data->title_slug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_travel')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_travel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_travel_organizer')); ?>:</b>
	<?php echo CHtml::encode($data->id_travel_organizer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ustad')); ?>:</b>
	<?php echo CHtml::encode($data->id_ustad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_event')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_event); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quota')); ?>:</b>
	<?php echo CHtml::encode($data->quota); ?>
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