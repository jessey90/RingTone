<?php $this->beginContent('//layouts/main'); ?>
<div id="wrapper" class="container">
        <div class='span9'>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                                                                 'links' => $this->breadcrumbs,
                                                            ));?>
        </div>
        <?php echo $content; ?>
        <!-- main content -->

</div>     <!-- wrapper -->
<?php $this->endContent(); ?>