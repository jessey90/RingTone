<?php
var_dump($data->ID);die();
?>
<div class="item oh">
    <a href="<?php echo Utils::getUrlDetail($detail->cat_id,$detail->alias,$detail->id); ?>" class="thumb159" title="<?php echo $detail->title ?>">
        <img src="<?php echo Utils::getImageUrl($detail->image, 200) ?>" class="thumb" alt="<?php echo $detail->title ?>">
        <div class="frame167_137"></div>
    </a>
    <h2 class="h2Title">
        <a href="<?php echo Utils::getUrlDetail($detail->cat_id,$detail->alias,$detail->id); ?>" title="<?php echo $detail->title ?>">
            <?php echo ($detail->featured == 1) ? '<i class="hot"></i>' : ''; ?>
            <?php echo $detail->title; ?>
        </a>
    </h2>
    <h3 class="h3Lead">
        <?php echo $detail->introtext; ?>
    </h3>
    <div class="postmeta">
        <span class="time"><?php echo date('d/m/Y | h:i', $detail->modified); ?></span>
        <div class="readmore fr">
            <a href="<?php echo Utils::getUrlDetail($detail->cat_id,$detail->alias,$detail->id); ?>"  title="<?php echo $detail->title ?>">Chi tiết »</a>
        </div>
    </div>
</div>