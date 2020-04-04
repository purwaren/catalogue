<?php
/**
 * @var $data ItemCustom
 */
$img = $data->getFirstImage();
if (empty($img)) {
    $img = 'https://via.placeholder.com/400';
}
?>
<div class="col-lg-3 col-md-4">
    <div class="product">
        <div class="image"><a href="<?php echo Yii::app()->createUrl('item/detail',array('id'=>$data->id)) ?>">
                <img src="<?php echo $img ?>" alt="<?php echo $data->name ?>" class="img-fluid image1"></a>
        </div>
        <div class="text">
            <h3 class="h5"><a href="<?php echo Yii::app()->createUrl('item/detail', array('id'=>$data->id))?>">
                    <?php echo $data->name ?></a></h3>
            <p class="price">
                Rp <?php echo number_format($data->price) ?>
            </p>
        </div>
        <div class="ribbon-holder">
            <div class="ribbon new">NEW</div>
        </div>
    </div>
</div>
