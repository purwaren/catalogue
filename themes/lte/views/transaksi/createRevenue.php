<?php
/* @var $this TransaksiController */
/* @var $model Transaksi */

$this->breadcrumbs=array(
	'Transaksi'=>array('admin'),
	'Omset',
);

$this->pageTitle = "Input Omset"

?>
<section class="content">
	<?php $this->renderPartial('_formRevenue', array('model'=>$model)); ?>
</section>

