<?php
/* @var $this NegaraController */
/* @var $data Negara */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_negara')); ?>:</b>
	<?php echo CHtml::encode($data->nama_negara); ?>
	<br />


</div>