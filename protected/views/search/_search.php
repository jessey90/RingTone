<?php
/* @var $this SearchController */
/* @var $model Song */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID'); ?>
		<?php echo $form->textField($model,'ID',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->textField($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'network'); ?>
		<?php echo $form->textField($model,'network'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_hot'); ?>
		<?php echo $form->textField($model,'is_hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_at'); ?>
		<?php echo $form->textField($model,'update_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uploader'); ?>
		<?php echo $form->textField($model,'uploader'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_support'); ?>
		<?php echo $form->textField($model,'is_support'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'search_name'); ?>
		<?php echo $form->textField($model,'search_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'search_artist'); ?>
		<?php echo $form->textField($model,'search_artist',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'download'); ?>
		<?php echo $form->textField($model,'download',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'view'); ?>
		<?php echo $form->textField($model,'view'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tryurl'); ?>
		<?php echo $form->textField($model,'tryurl',array('size'=>60,'maxlength'=>260)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'urlfull'); ?>
		<?php echo $form->textField($model,'urlfull',array('size'=>60,'maxlength'=>260)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderNhacviet'); ?>
		<?php echo $form->textField($model,'OrderNhacviet'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'orderQuocte'); ?>
		<?php echo $form->textField($model,'orderQuocte'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderSangtao'); ?>
		<?php echo $form->textField($model,'OrderSangtao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderMonth'); ?>
		<?php echo $form->textField($model,'OrderMonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderWeek'); ?>
		<?php echo $form->textField($model,'OrderWeek'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderImuzik'); ?>
		<?php echo $form->textField($model,'OrderImuzik'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderQuatangamnhac'); ?>
		<?php echo $form->textField($model,'OrderQuatangamnhac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OrderKhongchuyen'); ?>
		<?php echo $form->textField($model,'OrderKhongchuyen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'artist'); ?>
		<?php echo $form->textField($model,'artist',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'source_id'); ?>
		<?php echo $form->textField($model,'source_id',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_online'); ?>
		<?php echo $form->textField($model,'file_online',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'file_offline'); ?>
		<?php echo $form->textField($model,'file_offline',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_new'); ?>
		<?php echo $form->textField($model,'is_new'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->