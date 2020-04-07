<?php
/* @var $this Controller */
$this->pageTitle = 'Tambah Supplier';
$this->breadcrumbs = array(
    'Supplier'=>array('suppliers/admin'),
    'Tambah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form',array('model'=>$model))?>
</section><!-- /.content -->