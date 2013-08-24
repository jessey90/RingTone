<?php
/* @var $this SearchController */
/* @var $model Song */

$this->breadcrumbs=array(
	'Songs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Song', 'url'=>array('index')),
	array('label'=>'Create Song', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#song-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Songs</h1>

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
	'id'=>'song-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID',
		'name',
		'category',
		'alias',
		'network',
		'description',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
