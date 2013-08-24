<?php

class SearchController extends Controller
{
    public function actionIndex(){
        $data=array();
        $keyword = Yii::app()->request->getParam('s');
        $where = " AND status =1";
        $data['dataProvider']  = new CActiveDataProvider('Song',array(
            'criteria'=>array(
                'select' => 'id',
                'condition'=>"name LIKE '%:keyword%'",
                'params'=>array(':keyword'=>$keyword),
                'order'=>'id DESC'
            ),
            'pagination'=>array(
                'pageSize'=>10
            )
        ));
        $this->breadcrumbs = array(
            'Tìm kiếm'
        );
        $this->render('index',$data);
    }
}
