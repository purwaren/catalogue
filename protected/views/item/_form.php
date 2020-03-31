<?php
/* @var $this ItemController */
/* @var $model ItemCustom */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-custom-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'item_code'); ?>
		<?php echo $form->textField($model,'item_code',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'item_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_code'); ?>
		<?php echo $form->textField($model,'cat_code',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'cat_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cat_name'); ?>
		<?php echo $form->textField($model,'cat_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'cat_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sup_code'); ?>
		<?php echo $form->textField($model,'sup_code',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'sup_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sup_name'); ?>
		<?php echo $form->textField($model,'sup_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'sup_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'qty_stock'); ?>
		<?php echo $form->textField($model,'qty_stock'); ?>
		<?php echo $form->error($model,'qty_stock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_by'); ?>
		<?php echo $form->textField($model,'updated_by',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'updated_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<?php echo $form->error($model,'updated_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->