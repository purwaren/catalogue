<?php
/* @var $this ItemController */
/* @var $model ImageUploadForm */

$this->pageTitle = 'Upload Gambar';
$this->breadcrumbs = array(
    'Barang'=>array('item/admin'),
    'Upload'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_formUpload',array('model'=>$model,'images'=>$images))?>
</section><!-- /.content -->