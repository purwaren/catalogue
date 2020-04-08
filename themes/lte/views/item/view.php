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

Yii::app()->clientScript->registerScript('sdf',"
    $('#itemSale').click(function(event){
        $(this).html('<i class=\"fa fa-repeat fa-spin\"></i>')
        if (!confirm('Anda yakin barang ini tersedia ?'))
            return false;
        ".CHtml::ajax(array(
            'url'=>Yii::app()->createUrl('item/join',array('id'=>$model->id)),
            'type'=>'POST',
            'success'=>"function(resp) {
                $('#itemSale').hide();
            }",
        ))."
    });
",CClientScript::POS_END);

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
                        'item_code',
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
            <?php if($model->created_by != Yii::app()->user->getName() && !StoresItemCustom::isSelling(Yii::app()->user->store_id, $model->id)) { ?>
            <button class="btn btn-info" id="itemSale">Ikut Menjual</button>
            <?php } ?>
		</div><!-- /.box-footer-->
	</div><!-- /.box -->
</section><!-- /.content -->



