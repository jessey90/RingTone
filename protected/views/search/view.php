<?php
/* @var $this SearchController */
/* @var $model Song */

$this->breadcrumbs=array(
	'Songs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Song', 'url'=>array('index')),
	array('label'=>'Create Song', 'url'=>array('create')),
	array('label'=>'Update Song', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Song', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Song', 'url'=>array('admin')),
);
?>

<h1>View Song #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'name',
		'category',
		'alias',
		'network',
		'description',
		'is_hot',
		'status',
		'update_at',
		'uploader',
		'cost',
		'type',
		'code',
		'is_support',
		'search_name',
		'search_artist',
		'download',
		'view',
		'tryurl',
		'urlfull',
		'OrderNhacviet',
		'orderQuocte',
		'OrderSangtao',
		'OrderMonth',
		'OrderWeek',
		'OrderImuzik',
		'OrderQuatangamnhac',
		'OrderKhongchuyen',
		'artist',
		'source_id',
		'file_online',
		'file_offline',
		'link',
		'avatar',
		'is_new',
	),
)); ?>
