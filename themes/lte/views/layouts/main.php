<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo Yii::app()->name;?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
<!--    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
<!--    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/font-awesome.min.css">
    <!-- Ionicons -->
<!--    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/style.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/skins/skin-blue.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/html5shiv.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/respond.min.js"></script>
    <![endif]-->
      <script data-ad-client="ca-pub-6718804203786731" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!--// load header and sidebar //-->
      <?php $this->renderPartial('/layouts/header'); ?>
      <?php $this->renderPartial('/layouts/sidebar'); ?>
      <?php echo $content; ?>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.1
        </div>
        <strong>Copyright &copy; <?php echo date('Y') ?> Mode Fashion Group. <?php echo Yii::powered(); ?>.</strong>
      </footer>

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
<!--    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/app.min.js"></script>
  </body>
</html>
