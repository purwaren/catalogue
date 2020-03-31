<?php
/* @var $this ItemController */
/* @var $model ImageUploadForm */
/* @var $form CActiveForm */

Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/assets/plugins/bootstrap-fileinput/css/fileinput.min.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/plugins/bootstrap-fileinput/fileinput.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScript('form', "
    $('#uploadFile').fileinput({
        showCaption: false,
        uploadUrl: '".Yii::app()->createUrl('item/upload', array('id'=>$model->item_id))."',
        uploadAsync: true,
        maxFileSize: 2048,
        maxFileCount: 3
    });
    
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
            <h3 class="box-title"><small>Silahkan upload gambar pada form di bawah ini</small></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>

            <div class="box-body">
                <div class="form-group">
                    <?php echo $form->labelEx($model,'images'); ?>
                    <div class="input-group input-group-sm">
                        <?php echo $form->hiddenField($model,'item_id',array('class'=>'form-control','placeholder'=>'Foto Barang')); ?>
                        <span class="input-group-btn">
                        <input type="file" multiple class="file-loading" id="uploadFile" accept="image/*"/>
                    </span>
                    </div>
                    <?php echo $form->error($model,'images'); ?>
                </div>

            </div><!-- /.box-body -->
            <div class="box-footer">
                <?php echo CHtml::linkButton('Kembali',array('class'=>'btn btn-danger','href'=>array('users/admin'))); ?>
            </div>
    </div><!-- /.box -->
    <?php $this->endWidget(); ?>

</div><!-- form -->
