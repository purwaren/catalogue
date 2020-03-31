<?php
/* @var $this ItemController */
/* @var $model ItemCustom */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/plugins/select2/select2.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/plugins/select2/select2.full.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/plugins/mask-money/jquery.maskMoney.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScript('form', "
    $('.select2').select2();
    $('#price').maskMoney({
    	'precision': 0
    });
    $('#price').maskMoney('mask');
   
    ", CClientScript::POS_END);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('role'=>'form','enctype'=>'multipart/form-data')
)); ?>
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><small>Isian bertanda * tidak boleh dikosongkan</small></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <?php if($msg=Yii::app()->user->getFlash('expired')) { ?>
            <div class="box-body">
                <div class="alert alert-warning">
                    <?php echo $msg ?>
                </div>
            </div>
        <?php } else { ?>
        <div class="box-body">
            <div class="form-group">
                <?php echo $form->labelEx($model,'item_code'); ?>
                <?php echo $form->textField($model,'item_code',array('class'=>'form-control','placeholder'=>'Kode barcode yang terdaftar di sikasir')); ?>
                <?php echo $form->error($model,'item_code'); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model,'description'); ?>
                <?php echo $form->textArea($model,'description',array('class'=>'form-control','placeholder'=>'Model, ukuran, warna dst.')); ?>
                <?php echo $form->error($model,'description'); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model,'price'); ?>
                <?php echo $form->textField($model,'price',array('class'=>'form-control','placeholder'=>'Harga barang',
                    'data-symbol'=>'Rp ', 'data-thousand'=>',', 'data-decimal'=>'.','id'=>'price')); ?>
                <?php echo $form->error($model,'price'); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model,'qty_stock'); ?>
                <?php echo $form->numberField($model,'qty_stock',array('class'=>'form-control','placeholder'=>'Harga barang')); ?>
                <?php echo $form->error($model,'qty_stock'); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model,'cat_code'); ?>
                <?php echo $form->dropDownList($model,'cat_code',CategoriesCustom::getAllCategoryOptions(),array('class'=>'form-control select2','prompt'=>'Pilih Kelompok Barang')); ?>
                <?php echo $form->error($model,'cat_code'); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model,'sup_code'); ?>
                <?php echo $form->dropDownList($model,'sup_code',SuppliersCustom::getAllSupplierOptions(),array('class'=>'form-control select2','prompt'=>'Pilih Supplier')); ?>
                <?php echo $form->error($model,'sup_code'); ?>
            </div>

        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo CHtml::submitButton('Simpan',array('class'=>'btn btn-primary')); ?>
            &nbsp;
            <?php echo CHtml::linkButton('Kembali',array('class'=>'btn btn-danger','href'=>array('users/admin'))); ?>
        </div>
        <?php } ?>
    </div><!-- /.box -->
<?php $this->endWidget(); ?>

</div><!-- form -->