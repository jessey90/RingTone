<?php
/* @var $this DetailController */
/* @var $data Song */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
	<?php echo CHtml::encode($data->category); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alias')); ?>:</b>
	<?php echo CHtml::encode($data->alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('network')); ?>:</b>
	<?php echo CHtml::encode($data->network); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_hot')); ?>:</b>
	<?php echo CHtml::encode($data->is_hot); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_at')); ?>:</b>
	<?php echo CHtml::encode($data->update_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploader')); ?>:</b>
	<?php echo CHtml::encode($data->uploader); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('code')); ?>:</b>
	<?php echo CHtml::encode($data->code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_support')); ?>:</b>
	<?php echo CHtml::encode($data->is_support); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('search_name')); ?>:</b>
	<?php echo CHtml::encode($data->search_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('search_artist')); ?>:</b>
	<?php echo CHtml::encode($data->search_artist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('download')); ?>:</b>
	<?php echo CHtml::encode($data->download); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view')); ?>:</b>
	<?php echo CHtml::encode($data->view); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tryurl')); ?>:</b>
	<?php echo CHtml::encode($data->tryurl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('urlfull')); ?>:</b>
	<?php echo CHtml::encode($data->urlfull); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderNhacviet')); ?>:</b>
	<?php echo CHtml::encode($data->OrderNhacviet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orderQuocte')); ?>:</b>
	<?php echo CHtml::encode($data->orderQuocte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderSangtao')); ?>:</b>
	<?php echo CHtml::encode($data->OrderSangtao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderMonth')); ?>:</b>
	<?php echo CHtml::encode($data->OrderMonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderWeek')); ?>:</b>
	<?php echo CHtml::encode($data->OrderWeek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderImuzik')); ?>:</b>
	<?php echo CHtml::encode($data->OrderImuzik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderQuatangamnhac')); ?>:</b>
	<?php echo CHtml::encode($data->OrderQuatangamnhac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OrderKhongchuyen')); ?>:</b>
	<?php echo CHtml::encode($data->OrderKhongchuyen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('artist')); ?>:</b>
	<?php echo CHtml::encode($data->artist); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('source_id')); ?>:</b>
	<?php echo CHtml::encode($data->source_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_online')); ?>:</b>
	<?php echo CHtml::encode($data->file_online); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_offline')); ?>:</b>
	<?php echo CHtml::encode($data->file_offline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::encode($data->link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar')); ?>:</b>
	<?php echo CHtml::encode($data->avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_new')); ?>:</b>
	<?php echo CHtml::encode($data->is_new); ?>
	<br />

	*/ ?>

</div>