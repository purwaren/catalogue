<?php
/**
 * @var $data ItemCustom
 */
?>
<div class="col-lg-3 col-md-4">
    <div class="product">
        <div class="image"><a href="<?php echo Yii::app()->createUrl('item/detail',array('id'=>$data->id)) ?>">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/product2.jpg" alt="" class="img-fluid image1"></a>
        </div>
        <div class="text">
            <h3 class="h5"><a href="shop-detail.html">White Blouse Armani</a></h3>
            <p class="price">
                <del>$280</del> $143.00
            </p>
        </div>
        <div class="ribbon-holder">
            <div class="ribbon new">NEW</div>
        </div>
    </div>
</div>
