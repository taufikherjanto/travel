<?php
/* @var $this UstadController */
/* @var $data Ustad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_ustad')); ?>:</b>
	<?php echo CHtml::encode($data->nama_ustad); ?>
	<br />

	<?php echo CHtml::image(Yii::app()->baseUrl.'/images/ustad/'.$data->foto, $data->nama_ustad, array('width'=>'150px')); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deskripsi_ustad')); ?>:</b>
	<?php echo CHtml::encode($data->deskripsi_ustad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>