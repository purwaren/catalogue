<?php
/* @var $this TransaksiController */
/* @var $data Transaksi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_input')); ?>:</b>
	<?php echo CHtml::encode($data->no_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_input')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_input); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tgl_bon')); ?>:</b>
	<?php echo CHtml::encode($data->tgl_bon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timestamp_db')); ?>:</b>
	<?php echo CHtml::encode($data->timestamp_db); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_user')); ?>:</b>
	<?php echo CHtml::encode($data->id_user); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status_dana')); ?>:</b>
	<?php echo CHtml::encode($data->status_dana); ?>
	<br />

	*/ ?>

</div>