<?php
/* @var $this SuppliersController */
/* @var $model SuppliersCustom */
$this->pageTitle = 'Detil Supplier';

$this->breadcrumbs=array(
	'Supplier'=>array('admin'),
	$model->code,
);

?>

<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title"><small>Informasi lengkap tentang supplier</small></h3>
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
                        'code',
                        'name',
                        'type',
                        'address',
                        'phone',
                        'created_at',
                        'created_by'
					),
					'htmlOptions'=>array(
						'class'=>'table table-hover table-striped'
					),
			)); ?>
			</div>
		</div><!-- /.box-body -->
		<div class="box-footer">
			<?php echo CHtml::link('Kembali',array('suppliers/admin'),array('class'=>'btn btn-primary'))?>
		</div><!-- /.box-footer-->
	</div><!-- /.box -->
</section><!-- /.content -->



