<?php
/* @var $this ItemController */
/* @var $model ItemCustom */
/* @var $image string */
$this->pageTitle = 'Detil Barang';

$this->breadcrumbs=array(
	'Barang'=>array('admin'),
	$model->item_code,
);

$image = $model->getFirstImage();
$imageUrl =  Yii::app()->theme->baseUrl .'/assets2/img/product2.jpg';
if (!empty($image)) {
    $imageUrl = $image;
}

?>

<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title"><small>Detil informasi barang</small></h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<div class="col-lg-6">
			<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'attributes'=>array(
                        'id',
                        'name',
                        'description',
                        'price',
                        'qty_stock',
                        'created_at',
                        'created_by',
                        'updated_at',
                        'updated_by',
                        'updated_at'
					),
					'htmlOptions'=>array(
						'class'=>'table table-hover table-striped'
					),
			)); ?>
			</div>
            <div class="col-lg-6">
                <div>
                    <img src="<?php echo $imageUrl?>" class="img-responsive" />
                </div>
            </div>
		</div><!-- /.box-body -->
		<div class="box-footer">
			<?php echo CHtml::link('Kembali',array('item/admin'),array('class'=>'btn btn-primary'))?>
            <?php echo CHtml::link('Ubah',array('item/update','id'=>$model->id),array('class'=>'btn btn-warning'))?>
		</div><!-- /.box-footer-->
	</div><!-- /.box -->
</section><!-- /.content -->



