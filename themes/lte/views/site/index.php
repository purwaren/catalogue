<?php
/**
 * @var $model ItemCustom
 */
?>
<section style="background: url('<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/photogrid.jpg') center center repeat; background-size: cover;" class="relative-positioned">
    <!-- Carousel Start-->
    <div class="home-carousel">
      <div class="dark-mask mask-primary"></div>
      <div class="container">
        <div class="homepage owl-carousel">
          <div class="item">
            <div class="row">
              <div class="col-md-7 text-right">
                <p><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/logo.png" alt="" class="ml-auto"></p>
                <h1>Multipurpose responsive theme</h1>
                <p>Business. Corporate. Agency.<br>Portfolio. Blog. E-commerce.</p>
              </div>
              <div class="col-md-5"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner-1.jpeg" alt="" class="img-fluid"></div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5 text-center"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner-2.jpeg" alt="" class="img-fluid"></div>
              <div class="col-md-7">
                <h2>46 HTML pages full of features</h2>
                <ul class="list-unstyled">
                  <li>Sliders and carousels</li>
                  <li>4 Header variations</li>
                  <li>Google maps, Forms, Megamenu, CSS3 Animations and much more</li>
                  <li>+ 11 extra pages showing template features</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-7 text-right">
                <h1>Design</h1>
                <ul class="list-unstyled">
                  <li>Clean and elegant design</li>
                  <li>Full width and boxed mode</li>
                  <li>Easily readable Roboto font and awesome icons</li>
                  <li>7 preprepared colour variations</li>
                </ul>
              </div>
              <div class="col-md-5"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner-3.jpeg" alt="" class="img-fluid"></div>
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-5"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner-4.jpeg" alt="" class="img-fluid"></div>
              <div class="col-md-7">
                <h1>Easy to customize</h1>
                <ul class="list-unstyled">
                  <li>7 preprepared colour variations.</li>
                  <li>Easily to change fonts</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End-->
</section>
<section>
<div id="content">
    <div class="container">
        <div class="row bar">
        <div class="col-md-12">
            <div class="heading text-center">
              <h2>Koleksi Terbaru</h2>
            </div>
            <div class="products-big">
                <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$model->searchForHome(),
                    'itemView'=>'_item',
                    'itemsCssClass'=>'row products',
                    'template'=>'{items}',
                    'emptyTagName'=>'div',
                    'emptyCssClass'=>'product-not-found alert alert-info'
                )); ?>
            </div>
            <div class="pages">
            <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                <ul class="pagination">
                <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </nav>
            </div>
        </div>
        </div>
    </div>
</div>
</section>