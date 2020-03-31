<?php
/* @var $this Controller */
/* @var $model ItemForm */

$this->pageTitle = 'Input Barang';
$this->breadcrumbs = array(
    'Barang'=>array('item/admin'),
    'Input'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form',array('model'=>$model))?>
</section><!-- /.content -->