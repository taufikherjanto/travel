<?php
/* @var $this PenerbanganController */
/* @var $data Penerbangan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_penerbangan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_penerbangan); ?>
	<br />


</div>