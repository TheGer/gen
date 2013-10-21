<?php

/**
 * This is the model class for table "doctor".
 *
 * The followings are the available columns in table 'doctor':
 * @property integer $id
 * @property string $title
 * @property string $firstname
 * @property string $surname
 * @property string $sex
 * @property string $email
 * @property string $telephone1
 * @property string $telephone2
 * @property string $mobile
 * @property string $fax
 * @property string $language
 * @property string $comments
 * @property string $password
 * @property string $username
 * @property string $authcode
 *
 * The followings are the available model relations:
 * @property Doctorpatient[] $doctorpatients
 */
class Doctor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Doctor the static model class
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
		return 'doctor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        //just for registration
			array('title, firstname, surname, sex, email, telephone1, telephone2, mobile, fax, language, comments, password, username, authcode', 'required'),
			array('title, firstname, surname, sex, email, telephone1, telephone2, mobile, fax, language, password, username, authcode', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, firstname, surname, sex, email, telephone1, telephone2, mobile, fax, language, comments, password, username, authcode', 'safe', 'on'=>'search'),
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
			'patients' => array(self::MANY_MANY, 'Patient', 'doctorpatient(doctorid,patientid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'firstname' => 'Firstname',
			'surname' => 'Surname',
			'sex' => 'Sex',
			'email' => 'Email',
			'telephone1' => 'Telephone1',
			'telephone2' => 'Telephone2',
			'mobile' => 'Mobile',
			'fax' => 'Fax',
			'language' => 'Language',
			'comments' => 'Comments',
			'password' => 'Password',
			'username' => 'Username',
			'authcode' => 'Authcode',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('telephone1',$this->telephone1,true);
		$criteria->compare('telephone2',$this->telephone2,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('language',$this->language,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('authcode',$this->authcode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}