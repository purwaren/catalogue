<?php
/**
 * @var $this ItemController
 * @var $model ItemCustom
 * @var $store StoresCustom
 */

$thumbs = $model->getAllThumbImage();
if (empty($thumbs)) {
    $thumbs[] = 'https://via.placeholder.com/155';
}
$images = $model->getAllBigImage();
if (empty($images)) {
    $images[] = 'https://via.placeholder.com/540';
}
$param = ('phone='.$store->phone.'&text=Assalamualaikum kak, apakah item '.$model->name.'('.$model->item_code.') ready ?');
$whatsapp = 'https://api.whatsapp.com/send?'.$param;

$stores = StoresItemCustom::model()->findAllByAttributes(array('item_id'=>$model->id));
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
                <div class="row text-center">
                    <div class="col-md-12">
                        <h3 class="text-center text-uppercase">Koleksi <?php echo $store->name ?></h3>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon-outlined"><i class="fa fa-map-marker"></i></div>
                            <h3 class="h4">Alamat</h3>
                            <p><?php echo $store->address ?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon-outlined"><a href="<?php echo $whatsapp ?>" target="_blank"><i class="fa fa-whatsapp"></i></a></div>
                            <h3 class="h4">Kontak</h3>
                            <p>
                                Whatsapp: <?php echo $store->phone ?> <br>
                                Telepon: <?php echo $store->phone ?> <br>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-simple">
                            <div class="icon-outlined"><a href="https://instagram.com/<?php echo substr($store->ig_account,1) ?>" target="_blank"><i class="fa fa-instagram"></i></a> </div>
                            <h3 class="h4">Social Media</h3>
                            <p>
                                Instagram: <?php echo $store->ig_account ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-12">
                        <h3>TERSEDIA JUGA DI TOKO BERIKUT</h3>
                    </div>
                    <?php
                        $cssClass = 'col-md-3';
                        if (count($stores) == 1) {
                            $cssClass = 'col-md-12';
                        }
                        else if (count($stores) == 2) {
                            $cssClass = 'col-md-6';
                        }
                        else if (count($stores) == 3) {
                            $cssClass = 'col-md-4';
                        }
                        foreach ($stores as $row) {
                            $param = ('phone='.$row->store->phone.'&text=Assalamualaikum kak, apakah item '.$model->name.'('.$model->item_code.') ready ?');
                            $wa = 'https://api.whatsapp.com/send?'.$param;
                    ?>
                    <div class="<?php echo $cssClass ?>">
                        <div class="box-simple">
                            <div class="icon-outlined"><a href="<?php echo $wa ?>" target="_blank"><i class="fa fa-whatsapp"></i></a></div>
                            <h3 class="h4"><?php echo $row->store->name ?></h3>
                            <p>
                                Whatsapp: <?php echo $row->store->phone ?> <br>
                                Telepon: <?php echo $row->store->phone ?> <br>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
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