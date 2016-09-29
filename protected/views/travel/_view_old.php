<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_travel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nama_travel), array('detail', 'title_slug'=>$data->title_slug)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_travel')); ?>:</b>
	<?php echo CHtml::encode($data->nama_travel); ?>
	<br />

	<?php echo CHtml::image(Yii::app()->baseUrl."/images/travel/".$data->gambar,'alt',array("width"=>"150px")); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_travel')); ?>:</b>
	<?php echo CHtml::encode($data->kategori->jenis_travel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_travel_organizer')); ?>:</b>
	<?php echo CHtml::encode($data->organizer->nama_travel_organizer); ?>
	<br />

	<?php if ($data->ustad) { ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ustad')); ?>:</b>
	<?php echo CHtml::encode($data->ustad->nama_ustad); ?>
	<br />
	<?php } ?>	

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_event')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_event); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('harga')); ?>:</b>
	<?php echo CHtml::encode($data->harga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quota')); ?>:</b>
	<?php echo CHtml::encode($data->quota); ?>
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