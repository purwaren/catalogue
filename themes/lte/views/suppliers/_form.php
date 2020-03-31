<?php
/* @var $this SuppliersController */
/* @var $model SuppliersCustom */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'suppliers-custom-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><small>Isian bertanda * tidak boleh dikosongkan</small></h3>
        <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
            <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="form-group">
            <?php echo $form->labelEx($model,'code'); ?>
            <?php echo $form->textField($model,'code',array('class'=>'form-control','maxlength'=>128)); ?>
            <?php echo $form->error($model,'code'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model,'name'); ?>
            <?php echo $form->textField($model,'name',array('class'=>'form-control','maxlength'=>128)); ?>
            <?php echo $form->error($model,'name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'address'); ?>
            <?php echo $form->textField($model,'address',array('class'=>'form-control','maxlength'=>128)); ?>
            <?php echo $form->error($model,'address'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'phone'); ?>
            <?php echo $form->textField($model,'phone',array('class'=>'form-control','maxlength'=>128)); ?>
            <?php echo $form->error($model,'phone'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'type'); ?>
            <?php echo $form->dropDownList($model,'type',CreateSupplierForm::getAllTypeOptions(),array('class'=>'form-control','prompt'=>'Pilih Tipe')); ?>
            <?php echo $form->error($model,'type'); ?>
        </div>
    </div>
    <div class="box-footer">
        <div class="form-group">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>