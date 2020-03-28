<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_input'); ?>
		<?php echo $form->textField($model,'no_input',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_input'); ?>
		<?php echo $form->textField($model,'tgl_input'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tgl_bon'); ?>
		<?php echo $form->textField($model,'tgl_bon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timestamp_db'); ?>
		<?php echo $form->textField($model,'timestamp_db'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_dana'); ?>
		<?php echo $form->textField($model,'status_dana'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->