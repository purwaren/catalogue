<?php
/**
 * @var $this ItemController
 * @var $model ItemCustom
 */

$thumbs = $model->getAllThumbImage();
if (empty($thumbs)) {
    $thumbs[] = 'https://via.placeholder.com/155';
}
$images = $model->getAllBigImage();
if (empty($images)) {
    $images[] = 'https://via.placeholder.com/540';
}

?>
<div id="content">
    <div class="container">
        <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-lg-12">
                <p class="lead">
                    Mode Fashion menyediakan <strong>koleksi lengkap</strong> kebutuhan Fashion kamu. Kamu bisa menemukan berbagai jenis pakaian mulai dari
                    <span style="color: #ffc93e; font-weight: bold">Pakaian Wanita, Pakaian Anak-Anak, Aksesoris, Pakaian Pria</span>. <strong>Hasanah Mart</strong> menyediakan barang-barang kebutuhan rumah tangga dengan <span style="color: #ffc93e; font-weight: bold">harga terjangkau</span>.
                    Keuntungan penjualan di Hasanah Mart <span style="color: #ffc93e; font-weight: bold">100% digunakan untuk kegiatan amal.</span>
                </p>
                <p class="goToDescription"><a href="#details" class="scroll-to text-uppercase">Lihat Deskripsi Barang</a></p>
                <div id="productMain" class="row">
                    <div class="col-sm-6">
                        <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                            <?php
                                if(!empty($images)) {
                                    foreach ($images as $image) {
                                        echo '<div>'.CHtml::image($image, $model->name, array('class'=>'img-fluid')).'</div>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <form>
                                <div class="sizes">
                                    <h3>Ukuran (Size)</h3>
                                    <select class="bs-select">
                                        <option value="small">S (Kecil)</option>
                                        <option value="medium">M (Sedang)</option>
                                        <option value="large">L (Besar)</option>
                                        <option value="x-large">XL (Ekstra Besar)</option>
                                    </select>
                                </div>
                                <p class="price">Rp <?php echo number_format($model->price) ?></p>
                                <p class="text-center">
                                    <button type="submit" class="btn btn-template-outlined"><i class="fa fa-shopping-cart"></i> TERSEDIA : <?php echo number_format($model->qty_stock) ?> item</button>
                                </p>
                            </form>
                        </div>
                        <div data-slider-id="1" class="owl-thumbs">
                            <?php
                                foreach ($thumbs as $thumb) {
                                    echo '<button class="owl-thumb-item">'.CHtml::image($thumb, $model->name, array('class'=>'img-fluid')).'</button>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div id="details" class="box mb-4 mt-4">
                    <?php echo $model->description ?>
                </div>
                <div id="product-social" class="box social text-center mb-5 mt-5">
                    <h4 class="heading-light">Show it to your friends</h4>
                    <ul class="social list-inline">
                        <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external facebook"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external gplus"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="external twitter"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" data-animate-hover="pulse" class="email"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>