<?php
/* @var $this Controller */
$this->pageTitle = 'Ubah Toko';
$this->breadcrumbs = array(
    'Toko'=>array('stores/admin'),
    'Ubah'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form',array('model'=>$model))?>
</section><!-- /.content -->