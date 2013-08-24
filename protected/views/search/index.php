<div class="articleDetail">
    <div class="top"></div>
    <div class="center clearfix">
        <div class="content clearfix">
            <?php
            if ($this->breadcrumbs) {
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs
                ));
            }
            ?>
            <?php
            $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$dataProvider,
                'itemView'=>'_item',
                'enablePagination'=>false,
                'ajaxUpdate'=>true,
                'id'=>'listNews',
                'template'=>"{items}\n{pager}",
                'enablePagination'=>true,
                'emptyText'=>'<div class="empty_result">Không tìm thấy kết quả với từ khóa "<b>'.Yii::app()->request->getParam('s').'</b>"</div>',
                'htmlOptions'=>array('class'=>'listNews'),
                'pager' => array(
                    'header' => '',
                    'prevPageLabel'=>'Trước',
                    'nextPageLabel'=>'Tiếp theo',
                ),
            ));
            ?>
        </div>
        <!-- .content-->
    </div>
    <!-- .center-->
    <div class="bottom"></div>
    <!-- .bottom-->
</div>
