<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mode Fashion Group - Katalog Produk</title>
    <meta name="description" content="Online shop for Mode Fashion, ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/css/style.blue.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/css/custom.css">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/apple-touch-icon-152x152.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div id="all">
      <?php $this->renderPartial('/layouts/navbar')?>
      <?php echo $content ?>
      
      <!-- FOOTER -->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="h6">Tentang Kami</h4>
              <p>Mode Fashion Group merupakan retailer terbesar dan terlengkap untuk kebutuhan fashion Anda</p>
              <hr>
              <h4 class="h6">Join Our Monthly Newsletter</h4>
              <form>
                <div class="input-group">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i></button>
                  </div>
                </div>
              </form>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Blog</h4>
              <ul class="list-unstyled footer-blog-list">
                <li class="d-flex align-items-center">
                  <div class="image"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/detailsquare.jpg" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/detailsquare.jpg" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Blog post name</a></h5>
                  </div>
                </li>
                <li class="d-flex align-items-center">
                  <div class="image"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/detailsquare.jpg" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h5 class="mb-0"> <a href="post.html">Very very long blog post name</a></h5>
                  </div>
                </li>
              </ul>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <h4 class="h6">Contact</h4>
              <p class="text-uppercase"><strong>Universal Ltd.</strong><br>13/25 New Avenue <br>Newtown upon River <br>45Y 73J <br>England <br><strong>Great Britain</strong></p><a href="contact.html" class="btn btn-template-main">Go to contact page</a>
              <hr class="d-block d-lg-none">
            </div>
            <div class="col-lg-3">
              <ul class="list-inline photo-stream">
                <li class="list-inline-item"><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/detailsquare3.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/detailsquare2.jpg" alt="..." class="img-fluid"></a></li>
                <li class="list-inline-item"><a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/detailsquare.jpg" alt="..." class="img-fluid"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2020. Your company / name goes here</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="https://bootstrapious.com/snippets">Bootstrapious </a>&  <a href="https://fity.cz/">Fity</a></p>
                <!-- Please do not remove the backlink to us unless you purchase the Attribution-free License at https://bootstrapious.com/donate. Thank you. -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/waypoints/lib/jquery.waypoints.min.js"> </script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/jquery.counterup/jquery.counterup.min.js"> </script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/js/jquery.parallax-1.1.3.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/vendor/jquery.scrollto/jquery.scrollTo.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/js/front.js"></script>
  </body>
</html>