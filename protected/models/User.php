<?php

/**
 * This is the model class for table "nc_user".
 *
 * The followings are the available columns in table 'nc_user':
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property integer $status
 * @property string $password
 * @property string $password_strategy
 * @property string $salt
 * @property integer $requires_new_password
 * @property string $reset_token
 * @property integer $login_attempts
 * @property integer $login_time
 * @property string $login_ip
 * @property string $activation_key
 * @property string $validation_key
 * @property string $create_time
 * @property string $update_time
 *
 * The followings are the available model relations:
 * @property Songs[] $songs
 */
class User extends CActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_BANNED = 2;        //TODO
    const STATUS_REMOVED = 3;    //TODO

    //keep these in one place.
    const PASSWORD_MIN = 1;
    const PASSWORD_MAX = 50;
    const USERNAME_MIN = 3;
    const USERNAME_MAX = 45;
    const EMAIL_MAX = 125;
    const EMAIL_MIN = 3;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'nc_user';
	}

    /**
     * Behaviors
     * @return array
     */
    public function behaviors()
    {
        Yii::import('application.extensions.passwordbehavior.*');
        return array(
            // Password behavior strategy
            "APasswordBehavior" => array(
                "class" => "APasswordBehavior",
                "defaultStrategyName" => "ahash",
                "strategies" => array(
                    "bcrypt" => array(
                        "class" => "ABcryptPasswordStrategy",
                        "workFactor" => 14,
                        "minLength" => self::PASSWORD_MIN
                    ),
                    "ahash" => array(
                        "class" => "AHashPasswordStrategy",//for demo purposes
                        "workFactor" => 14,
                        "minLength" => self::PASSWORD_MIN
                    ),
                    "legacy" => array(
                        "class" => "ALegacyMd5PasswordStrategy",
                        'minLength' => self::PASSWORD_MIN
                    )
                ),
            )
        );
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, requires_new_password, login_attempts, login_time', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>45),
			array('email, password, salt, reset_token, validation_key', 'length', 'max'=>255),
			array('password_strategy', 'length', 'max'=>50),
			array('login_ip', 'length', 'max'=>32),
			array('activation_key', 'length', 'max'=>128),
			array('create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, email, status, password, password_strategy, salt, requires_new_password, reset_token, login_attempts, login_time, login_ip, activation_key, validation_key, create_time, update_time', 'safe', 'on'=>'search'),
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
			'songs' => array(self::HAS_MANY, 'Songs', 'uploader'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'email' => 'Email',
			'status' => 'Status',
			'password' => 'Password',
			'password_strategy' => 'Password Strategy',
			'salt' => 'Salt',
			'requires_new_password' => 'Requires New Password',
			'reset_token' => 'Reset Token',
			'login_attempts' => 'Login Attempts',
			'login_time' => 'Login Time',
			'login_ip' => 'Login Ip',
			'activation_key' => 'Activation Key',
			'validation_key' => 'Validation Key',
			'create_time' => 'Create Time',
			'update_time' => 'Update Time',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('password_strategy',$this->password_strategy,true);
		$criteria->compare('salt',$this->salt,true);
		$criteria->compare('requires_new_password',$this->requires_new_password);
		$criteria->compare('reset_token',$this->reset_token,true);
		$criteria->compare('login_attempts',$this->login_attempts);
		$criteria->compare('login_time',$this->login_time);
		$criteria->compare('login_ip',$this->login_ip,true);
		$criteria->compare('activation_key',$this->activation_key,true);
		$criteria->compare('validation_key',$this->validation_key,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}