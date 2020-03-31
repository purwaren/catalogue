<?php
/* @var $this Controller */
$this->pageTitle = 'Beranda';
?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>Upload Barang</h3>
                    <p>Menawarkan barang untuk dipesan</p>
                </div>
                <div class="icon">
                    <i class="fa fa-upload"></i>
                </div>
                <a href="<?php echo Yii::app()->createUrl('item/create')?>" class="small-box-footer">Mulai <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>Katalog</h3>
                    <p>Katalog Barang</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="<?php echo Yii::app()->createUrl('item/index',array('type'=>1))?>" class="small-box-footer">Mulai <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</section><!-- /.content -->