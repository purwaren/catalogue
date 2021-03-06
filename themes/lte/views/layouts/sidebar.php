<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/img/avatar04.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::app()->user->fullname?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php $this->widget('zii.widgets.CMenu',array(
            'items'=>array(
                array('label'=>'MAIN NAVIGATION','itemOptions'=>array('class'=>'header')),
                array(
                    'label'=>'<i class="fa fa-link"></i> <span>Ke Website</span>',
                    'url'=>array('/site/index'),
                    'itemOptions'=>array('class'=>'treeview')
                ),
                array(
                    'label'=>'<i class="fa fa-dashboard"></i> <span>Beranda</span>',
                    'url'=>array('/site/dashboard'),
                    'itemOptions'=>array('class'=>'treeview')
                ),
                array(
                    'label'=>'<i class="fa fa-file-text"></i> <span>Katalog</span>',
                    'url'=>array('/item/admin'),
                    'itemOptions'=>array('class'=>'treeview')
                ),
                array(
                    'label'=>'<i class="fa fa-file-excel-o"></i> <span>Kelompok Barang</span>',
                    'url'=>array('/categories/admin'),
                    'itemOptions'=>array('class'=>'treeview'),
                    'visible'=>Yii::app()->user->checkAccess('admin'),
                ),
                array(
                    'label'=>'<i class="fa fa-shopping-cart"></i> <span>Toko</span>',
                    'url'=>array('/stores/admin'),
                    'itemOptions'=>array('class'=>'treeview'),
                    'visible'=>Yii::app()->user->checkAccess('admin'),
                ),
                array(
                    'label'=>'<i class="fa fa-wrench"></i><span>Konfigurasi Sistem</span><i class="fa fa-angle-left pull-right"></i>',
                    'itemOptions'=>array('class'=>'treeview'),
                    'url'=>'#',
                    'items'=>array(
                        array('label'=>'<i class="fa fa-user"></i> Manajemen Pengguna','url'=>array('/users/admin')),
                        array('label'=>'<i class="fa fa-lock"></i> Manajemen Akses','url'=>array('/users/adminAssignment')),
                    ),
                    'encodeLabel'=>false,
                    'visible'=>Yii::app()->user->checkAccess('admin'),
                ),
            ),
            'encodeLabel'=>false,
            'htmlOptions'=>array('class'=>'sidebar-menu'),
            'submenuHtmlOptions'=>array('class'=>'treeview-menu'),
            'linkLabelWrapper'=>null,
        )); ?>

    </section>
    <!-- /.sidebar -->
</aside>