<?php

/**
 * This is the model class for table "nc_song".
 *
 * The followings are the available columns in table 'nc_song':
 * @property string $ID
 * @property string $name
 * @property integer $category
 * @property string $alias
 * @property integer $network
 * @property string $description
 * @property integer $is_hot
 * @property integer $status
 * @property string $artist
 * @property string $uploader
 * @property integer $cost
 * @property integer $type
 * @property integer $code
 * @property integer $is_support
 * @property string $search_name
 * @property string $search_artist
 * @property string $download
 * @property integer $view
 * @property string $tryurl
 * @property string $urlfull
 * @property integer $OrderNhacviet
 * @property integer $orderQuocte
 * @property integer $OrderSangtao
 * @property integer $OrderMonth
 * @property integer $OrderWeek
 * @property integer $OrderImuzik
 * @property integer $OrderQuatangamnhac
 * @property integer $OrderKhongchuyen
 *
 * The followings are the available model relations:
 * @property Categories $category0
 * @property Artist $artist0
 * @property Users $uploader0
 */
class Song extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Songs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nc_song';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, category, alias, network, is_hot, status, artist, uploader, cost, type, code, is_support, search_name', 'required'),
			array('category, network, is_hot, status, cost, type, code, is_support, view, OrderNhacviet, orderQuocte, OrderSangtao, OrderMonth, OrderWeek, OrderImuzik, OrderQuatangamnhac, OrderKhongchuyen', 'numerical', 'integerOnly'=>true),
			array('name, alias, description, search_name, search_artist', 'length', 'max'=>60),
			array('artist, uploader, download', 'length', 'max'=>20),
			array('tryurl, urlfull', 'length', 'max'=>260),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, name, category, alias, network, description, is_hot, status, artist, uploader, cost, type, code, is_support, search_name, search_artist, download, view, tryurl, urlfull, OrderNhacviet, orderQuocte, OrderSangtao, OrderMonth, OrderWeek, OrderImuzik, OrderQuatangamnhac, OrderKhongchuyen', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'category0' => array(self::BELONGS_TO, 'Categories', 'category'),
			'artist0' => array(self::BELONGS_TO, 'Artist', 'artist'),
			'uploader0' => array(self::BELONGS_TO, 'Users', 'uploader'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'name' => 'Name',
			'category' => 'Category',
			'alias' => 'Alias',
			'network' => 'Network',
			'description' => 'Description',
			'is_hot' => 'Is Hot',
			'status' => 'Status',
			'artist' => 'Artist',
			'uploader' => 'Uploader',
			'cost' => 'Cost',
			'type' => 'Type',
			'code' => 'Code',
			'is_support' => 'Is Support',
			'search_name' => 'Search Name',
			'search_artist' => 'Search Artist',
			'download' => 'Download',
			'view' => 'View',
			'tryurl' => 'Tryurl',
			'urlfull' => 'Urlfull',
			'OrderNhacviet' => 'Order Nhacviet',
			'orderQuocte' => 'Order Quocte',
			'OrderSangtao' => 'Order Sangtao',
			'OrderMonth' => 'Order Month',
			'OrderWeek' => 'Order Week',
			'OrderImuzik' => 'Order Imuzik',
			'OrderQuatangamnhac' => 'Order Quatangamnhac',
			'OrderKhongchuyen' => 'Order Khongchuyen',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('category',$this->category);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('network',$this->network);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('is_hot',$this->is_hot);
		$criteria->compare('status',$this->status);
		$criteria->compare('artist',$this->artist,true);
		$criteria->compare('uploader',$this->uploader,true);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('type',$this->type);
		$criteria->compare('code',$this->code);
		$criteria->compare('is_support',$this->is_support);
		$criteria->compare('search_name',$this->search_name,true);
		$criteria->compare('search_artist',$this->search_artist,true);
		$criteria->compare('download',$this->download,true);
		$criteria->compare('view',$this->view);
		$criteria->compare('tryurl',$this->tryurl,true);
		$criteria->compare('urlfull',$this->urlfull,true);
		$criteria->compare('OrderNhacviet',$this->OrderNhacviet);
		$criteria->compare('orderQuocte',$this->orderQuocte);
		$criteria->compare('OrderSangtao',$this->OrderSangtao);
		$criteria->compare('OrderMonth',$this->OrderMonth);
		$criteria->compare('OrderWeek',$this->OrderWeek);
		$criteria->compare('OrderImuzik',$this->OrderImuzik);
		$criteria->compare('OrderQuatangamnhac',$this->OrderQuatangamnhac);
		$criteria->compare('OrderKhongchuyen',$this->OrderKhongchuyen);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public static function getDetails($id){
        var_dump($id);die;
    }

}