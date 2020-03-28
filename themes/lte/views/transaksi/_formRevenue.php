<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */
/* @var $form CActiveForm */
Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/plugins/datepicker/datepicker3.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/plugins/datepicker/bootstrap-datepicker.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/plugins/mask-money/jquery.maskMoney.min.js');
Yii::app()->clientScript->registerScript('formRevenue',"
	$('#datepicker').datepicker({
      autoclose: true
    });
    $('#nominal').maskMoney();
");
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaksi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="box">
	<div class="box-header with-border">
		<h3 class="box-title"><small>Isian bertanda * tidak boleh dikosongkan</small></h3>
	</div>
	<div class="box-body">
		<div class="col-lg-6">
			<div class="form-group">
				<?php echo $form->labelEx($model,'koper',array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'koper',array('class'=>'form-control','readonly'=>true)); ?>
				<?php echo $form->error($model,'koper'); ?>
			</div>
			<div class="form-group">
				<?php echo $form->labelEx($model,'tgl_bon',array('class'=>'control-label')); ?>
				<div class="input-group date">
					<div class="input-group-addon">
						<i class="fa fa-calendar"></i>
					</div>
					<?php echo $form->textField($model,'tgl_bon',array('class'=>'pull-right form-control','readonly'=>true,'id'=>'datepicker')); ?>
				</div>
				<?php echo $form->error($model,'tgl_bon'); ?>
			</div>
			<div class="form-group">
				<?php echo $form->labelEx($model,'nominal',array('class'=>'control-label')); ?>
				<?php echo $form->textField($model,'nominal',array('class'=>'form-control','data-symbol'=>'IDR ',
					'data-thousand'=>',', 'data-decimal'=>'.','id'=>'nominal')); ?>
				<?php echo $form->error($model,'nominal'); ?>
			</div>
			<div class="form-group">
				<?php echo $form->labelEx($model,'keterangan',array('class'=>'control-label')); ?>
				<?php echo $form->textArea($model,'keterangan',array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'keterangan'); ?>
			</div>
		</div>

	</div>


	<div class="box-footer">
		<div class="col-lg-6">
			<div class="form-group">
				<?php echo CHtml::submitButton('Simpan', array('class'=>'btn btn-primary')); ?>
			</div>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->