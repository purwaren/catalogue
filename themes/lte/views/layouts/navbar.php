<!-- Top bar-->
<div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Hubungi kami di Whatsapp +62 812-6591-955 atau email: mode.medan@gmail.com</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <?php if (Yii::app()->user->isGuest) { ?>
                    <div class="login"><a href="<?php echo Yii::app()->createUrl('site/login')?>" class="login-btn"><i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Log In</span></a></div>
                <?php } else { ?>
                    <div class="login"><a href="<?php echo Yii::app()->createUrl('site/dashboard')?>" class="login-btn"><i class="fa fa-dashboard"></i><span class="d-none d-md-inline-block">Dashboard</span></a></div>
                <?php } ?>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top bar end-->
      <!-- Login Modal-->
      <!-- Login modal end-->
      <!-- Navbar Start-->
      <header class="nav-holder make-sticky">
        <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
          <div class="container"><a href="<?php echo Yii::app()->createUrl('site/index') ?>" class="navbar-brand home"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/logo-mfg.png" alt="Mode Fashion Group" class="d-none d-md-inline-block"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets2/img/logo-mfg.png" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Universal - go to homepage</span></a>
            <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <div id="navigation" class="navbar-collapse collapse">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown"><a href="<?php echo Yii::app()->createUrl('site/catalogue',array('group'=>'B')) ?>"  class="dropdown-toggle">Pakaian Wanita </b></a>
                </li>
                <li class="nav-item dropdown"><a href="<?php echo Yii::app()->createUrl('site/catalogue',array('group'=>'C')) ?>" class="dropdown-toggle">Pakaian Anak </b></a>
                </li>
                <li class="nav-item dropdown"><a href="<?php echo Yii::app()->createUrl('site/catalogue',array('group'=>'D')) ?>" class="dropdown-toggle">Aksesoris </b></a>
                </li>
                <li class="nav-item dropdown"><a href="<?php echo Yii::app()->createUrl('site/catalogue',array('group'=>'A')) ?>" class="dropdown-toggle">Pakaian Pria </b></a>
                </li>
                  <li class="nav-item dropdown"><a href="<?php echo Yii::app()->createUrl('site/catalogue',array('group'=>'F')) ?>" class="dropdown-toggle">Hasanah Mart</b></a>
                  </li>
              </ul>
            </div>
            <div id="search" class="collapse clearfix">
              <form role="search" class="navbar-form">
                <div class="input-group">
                  <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </header>
      <!-- Navbar End-->