<?php
/* @var $this Controller */
/* @var $model ImageUploadForm */

$this->pageTitle = 'Upload Gambar';
$this->breadcrumbs = array(
    'Barang'=>array('item/admin'),
    'Upload'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_formUpload',array('model'=>$model))?>
</section><!-- /.content -->