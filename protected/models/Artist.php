<?php

/**
 * This is the model class for table "nc_artist".
 *
 * The followings are the available columns in table 'nc_artist':
 * @property string $ID
 * @property string $name
 * @property string $alias
 * @property string $description
 * @property integer $status
 * @property integer $is_hot
 * @property string $search_name
 * @property string $avatar
 *
 * The followings are the available model relations:
 * @property Song[] $songs
 */
class Artist extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Artist the static model class
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
		return 'nc_artist';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, alias, status, is_hot, search_name', 'required'),
			array('status, is_hot', 'numerical', 'integerOnly'=>true),
			array('name, alias, description, search_name', 'length', 'max'=>60),
			array('avatar', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, name, alias, description, status, is_hot, search_name, avatar', 'safe', 'on'=>'search'),
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
			'songs' => array(self::HAS_MANY, 'Song', 'artist'),
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
			'alias' => 'Alias',
			'description' => 'Description',
			'status' => 'Status',
			'is_hot' => 'Is Hot',
			'search_name' => 'Search Name',
			'avatar' => 'Avatar',
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
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('is_hot',$this->is_hot);
		$criteria->compare('search_name',$this->search_name,true);
		$criteria->compare('avatar',$this->avatar,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}