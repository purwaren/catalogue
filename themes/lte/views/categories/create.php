<?php
/* @var $this Controller */
$this->pageTitle = 'Tambah Kelompok Barang';
$this->breadcrumbs = array(
    'Kelompok Barang'=>array('categories/admin'),
    'Tambah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form',array('model'=>$model))?>
</section><!-- /.content -->