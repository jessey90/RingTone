<?php
/* @var $this SearchController */
/* @var $model Song */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'song-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category'); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'network'); ?>
		<?php echo $form->textField($model,'network'); ?>
		<?php echo $form->error($model,'network'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_hot'); ?>
		<?php echo $form->textField($model,'is_hot'); ?>
		<?php echo $form->error($model,'is_hot'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_at'); ?>
		<?php echo $form->textField($model,'update_at'); ?>
		<?php echo $form->error($model,'update_at'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uploader'); ?>
		<?php echo $form->textField($model,'uploader'); ?>
		<?php echo $form->error($model,'uploader'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'code'); ?>
		<?php echo $form->textField($model,'code'); ?>
		<?php echo $form->error($model,'code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_support'); ?>
		<?php echo $form->textField($model,'is_support'); ?>
		<?php echo $form->error($model,'is_support'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'search_name'); ?>
		<?php echo $form->textField($model,'search_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'search_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'search_artist'); ?>
		<?php echo $form->textField($model,'search_artist',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'search_artist'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'download'); ?>
		<?php echo $form->textField($model,'download',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'download'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'view'); ?>
		<?php echo $form->textField($model,'view'); ?>
		<?php echo $form->error($model,'view'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tryurl'); ?>
		<?php echo $form->textField($model,'tryurl',array('size'=>60,'maxlength'=>260)); ?>
		<?php echo $form->error($model,'tryurl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'urlfull'); ?>
		<?php echo $form->textField($model,'urlfull',array('size'=>60,'maxlength'=>260)); ?>
		<?php echo $form->error($model,'urlfull'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderNhacviet'); ?>
		<?php echo $form->textField($model,'OrderNhacviet'); ?>
		<?php echo $form->error($model,'OrderNhacviet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orderQuocte'); ?>
		<?php echo $form->textField($model,'orderQuocte'); ?>
		<?php echo $form->error($model,'orderQuocte'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderSangtao'); ?>
		<?php echo $form->textField($model,'OrderSangtao'); ?>
		<?php echo $form->error($model,'OrderSangtao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderMonth'); ?>
		<?php echo $form->textField($model,'OrderMonth'); ?>
		<?php echo $form->error($model,'OrderMonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderWeek'); ?>
		<?php echo $form->textField($model,'OrderWeek'); ?>
		<?php echo $form->error($model,'OrderWeek'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderImuzik'); ?>
		<?php echo $form->textField($model,'OrderImuzik'); ?>
		<?php echo $form->error($model,'OrderImuzik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderQuatangamnhac'); ?>
		<?php echo $form->textField($model,'OrderQuatangamnhac'); ?>
		<?php echo $form->error($model,'OrderQuatangamnhac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrderKhongchuyen'); ?>
		<?php echo $form->textField($model,'OrderKhongchuyen'); ?>
		<?php echo $form->error($model,'OrderKhongchuyen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'artist'); ?>
		<?php echo $form->textField($model,'artist',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'artist'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source_id'); ?>
		<?php echo $form->textField($model,'source_id',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'source_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_online'); ?>
		<?php echo $form->textField($model,'file_online',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'file_online'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'file_offline'); ?>
		<?php echo $form->textField($model,'file_offline',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'file_offline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_new'); ?>
		<?php echo $form->textField($model,'is_new'); ?>
		<?php echo $form->error($model,'is_new'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->