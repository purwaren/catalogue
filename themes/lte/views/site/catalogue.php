<?php
/**
 * @var $this SiteController
 * @var $model ItemCustom
 * @var $category CategoriesCustom
 */

?>
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
        <div class="col-md-7">
            <h1 class="h2"><?php echo $category->getGroup() ?></h1>
        </div>
        <div class="col-md-5">
            <ul class="breadcrumb d-flex justify-content-end">
            <li class="breadcrumb-item"><a href="<?php echo Yii::app()->createUrl('site/index') ?>">Beranda</a></li>
            <li class="breadcrumb-item active"><?php echo $category->getGroup() ?></li>
            </ul>
        </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="container">
        <div class="row bar">
        <div class="col-md-12">
            <?php if($category->cat_group == 'B') { ?>
            <p class="text-muted lead text-center">
                Katalog pakaian wanita Mode Fashion, menyediakan beragam jenis pakaian mulai dari atasan, bawahan, dress, gamis dan yang lain.
                Hadir dengan pilihan menarik dan kualitas terbaik hanya untuk kamu. Dapatkan dan segera miliki fashion terbaru dari kami.
            </p>
            <?php } elseif($category->cat_group == 'A') { ?>
            <?php } ?>
            <div class="products-big">
                <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$model->searchForCatalogue($category->cat_group),
                    'itemView'=>'_catalogue',
                    'itemsCssClass'=>'row products',
                    'template'=>'{items} {pager}',
                    'emptyTagName'=>'div',
                    'emptyCssClass'=>'product-not-found alert alert-info',
                    'enablePagination'=>true,
                    'pagerCssClass'=>'pages d-flex justify-content-center',
                    'pager'=>array(
                        'htmlOptions'=>array('class'=>'pagination'),
                        'internalPageCssClass'=>'page-item',
                        'firstPageCssClass'=>'page-item',
                        'lastPageCssClass'=>'page-item',
                        'selectedPageCssClass'=>'active',
                        'header'=>'',
                        'firstPageLabel'=>'<< ',
                        'lastPageLabel'=>' >>',
                        'nextPageLabel'=>' >',
                        'prevPageLabel'=>'< '
                    )
                )); ?>
            </div>
        </div>
        </div>
    </div>
</div>