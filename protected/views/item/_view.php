<?php
/* @var $this ItemController */
/* @var $data ItemCustom */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_code')); ?>:</b>
	<?php echo CHtml::encode($data->item_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_code')); ?>:</b>
	<?php echo CHtml::encode($data->cat_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cat_name')); ?>:</b>
	<?php echo CHtml::encode($data->cat_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sup_code')); ?>:</b>
	<?php echo CHtml::encode($data->sup_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sup_name')); ?>:</b>
	<?php echo CHtml::encode($data->sup_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('qty_stock')); ?>:</b>
	<?php echo CHtml::encode($data->qty_stock); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->updated_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	*/ ?>

</div>