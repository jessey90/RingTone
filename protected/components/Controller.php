<?php
/**
 * Controller.php
 *
 *@author: spiros kabasakalis <kabasakalis@gmail.com>
  * Date: 11/15/12
  * Time: 22:46 PM
 */
class Controller extends CController
{

    public function  init(){
        $this->registerJs();
        $this->registerCss();
    }

    public function registerJs(){
        //cs()->registerScriptFile(bu().'/js/libs/modernizr-2.6.2.min.js',CClientScript::POS_HEAD);
        //cs()->registerScriptFile(bu().'/js/libs/jquery-1.8.2.min.js',CClientScript::POS_BEGIN);
        //cs()->registerScriptFile(bu().'/js/plugins.js',CClientScript::POS_END);
        //cs()->registerScriptFile(bu().'/js/main.js',CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/libs/jquery-2.0.2.min.js');
        //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/popupWeb.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.mmenu.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.fancybox.pack.js');
    }

    public function registerCss(){
        //cs()->registerCssFile(bu() .'/css/main.css');
        //cs()->registerCssFile(bu() .'/css/responsive_custom.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/popup.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/mmenu.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/docs.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/css.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/jquery.fancybox.css');
     }

	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
    public $layout = '//layouts/col2';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
}