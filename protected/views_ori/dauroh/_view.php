<?php
/* @var $this DaurohController */
/* @var $data Dauroh */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('judul')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->judul), array('detail', 'title_slug'=>$data->title_slug)); ?>
	<br />

	<?php echo CHtml::image(Yii::app()->baseUrl."/images/dauroh/".$data->gambar,'alt',array("width"=>"150px")); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_kategori')); ?>:</b>
	<?php echo CHtml::encode($data->kategori->jenis_travel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_berangkat')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_berangkat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pendamping')); ?>:</b>
    <?php echo CHtml::encode($data->pendamping->nama_pendamping); ?>
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
	
</div>