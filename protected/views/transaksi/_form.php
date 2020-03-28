<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'no_input'); ?>
		<?php echo $form->textField($model,'no_input',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'no_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_input'); ?>
		<?php echo $form->textField($model,'tgl_input'); ?>
		<?php echo $form->error($model,'tgl_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tgl_bon'); ?>
		<?php echo $form->textField($model,'tgl_bon'); ?>
		<?php echo $form->error($model,'tgl_bon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timestamp_db'); ?>
		<?php echo $form->textField($model,'timestamp_db'); ?>
		<?php echo $form->error($model,'timestamp_db'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
		<?php echo $form->error($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_dana'); ?>
		<?php echo $form->textField($model,'status_dana'); ?>
		<?php echo $form->error($model,'status_dana'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->