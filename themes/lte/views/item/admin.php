<?php
/* @var $this Controller */
/* @var $model CategoriesCustom */

$this->pageTitle = 'Katalog Barang';
$this->breadcrumbs = array(
    'Barang'
);
?>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><small>Daftar barang yang tercatat di dalam sistem</small></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <?php $this->widget('zii.widgets.grid.CGridView', array(
                'id'=>'item-grid',
                'dataProvider'=>$model->search(),
                'filter'=>$model,
                'columns'=>array(
                    array(
                        'header'=>'No',
                        'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize+$row+1'
                    ),
                    'item_code',
                    'name',
                    array(
                        'name'=>'cat_code',
                        'value'=>'$data->getCategory()'
                    ),
                    array(
                        'name'=>'price',
                        'type'=>'number'
                    ),
                    'qty_stock',
                    array(
                        'class'=>'CButtonColumn',
                        'template'=>'{view} {update} {upload} {delete}',
                        'buttons'=>array(
                            'view'=>array(
                                'label'=>'<i class="fa fa-search"></i>',
                                'imageUrl'=>false,
                                'options'=>array('class'=>'btn btn-xs btn-primary','title'=>'Detail','data-toggle'=>'tooltip')
                            ),
                            'update'=>array(
                                'label'=>'<i class="fa fa-edit"></i>',
                                'imageUrl'=>false,
                                'options'=>array('class'=>'btn btn-xs btn-warning','title'=>'Ubah','data-toggle'=>'tooltip')
                            ),
                            'upload'=>array(
                                'label'=>'<i class="fa fa-cloud-upload"></i>',
                                'imageUrl'=>false,
                                'url'=> 'Yii::app()->createUrl("item/upload",array("id"=>$data->id))',
                                'options'=>array('class'=>'btn btn-xs btn-info','title'=>'Upload','data-toggle'=>'tooltip')
                            ),
                            'delete'=>array(
                                'label'=>'<i class="fa fa-trash"></i>',
                                'imageUrl'=>false,
                                'options'=>array('class'=>'btn btn-xs btn-danger','title'=>'Hapus','data-toggle'=>'tooltip'),
                            )
                        )
                    ),
                ),
                'itemsCssClass'=>'table table-striped table-bordered table-hover dataTable',
                'cssFile' => false,
                'summaryCssClass' => 'dataTables_info',
                'template'=>'{summary}{items}{pager}',
                'pagerCssClass'=>'dataTables_paginate paging_simple_numbers text-center',
                'pager'=>array(
                    'htmlOptions'=>array('class'=>'pagination'),
                    'internalPageCssClass'=>'paginate_button',
                    'selectedPageCssClass'=>'active',
                    'header'=>''
                ),
            )); ?>
        </div><!-- /.box-body -->
        <div class="box-footer">
            <?php echo CHtml::link('Tambah',array('item/create'),array('class'=>'btn btn-primary'))?>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->