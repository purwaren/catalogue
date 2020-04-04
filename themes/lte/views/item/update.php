<?php
/* @var $this Controller */
/* @var $model ItemForm */

$this->pageTitle = 'Update Barang';
$this->breadcrumbs = array(
    'Barang'=>array('item/admin'),
    'Update'
);
?>
<!-- Main content -->
<section class="content">
    <?php $this->renderPartial('_form',array('model'=>$model))?>
</section><!-- /.content -->