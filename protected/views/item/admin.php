<?php
/* @var $this ItemController */
/* @var $model ItemCustom */

$this->breadcrumbs=array(
	'Item Customs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ItemCustom', 'url'=>array('index')),
	array('label'=>'Create ItemCustom', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#item-custom-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Item Customs</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'item-custom-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'item_code',
		'name',
		'cat_code',
		'cat_name',
		'sup_code',
		/*
		'sup_name',
		'price',
		'qty_stock',
		'created_by',
		'created_at',
		'updated_by',
		'updated_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
