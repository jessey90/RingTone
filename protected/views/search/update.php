<?php
/* @var $this SearchController */
/* @var $model Song */

$this->breadcrumbs=array(
	'Songs'=>array('index'),
	$model->name=>array('view','id'=>$model->ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Song', 'url'=>array('index')),
	array('label'=>'Create Song', 'url'=>array('create')),
	array('label'=>'View Song', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'Manage Song', 'url'=>array('admin')),
);
?>

<h1>Update Song <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>