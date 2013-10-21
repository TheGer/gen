<?php

/**
 * This is the model class for table "opthalmologicalvisualfieldtest".
 *
 * The followings are the available columns in table 'opthalmologicalvisualfieldtest':
 * @property integer $id
 * @property integer $examid
 * @property string $performed
 * @property string $device
 * @property string $eye
 * @property string $other
 * @property string $notperformedcomment
 * @property integer $centralsensitivity
 * @property integer $preservedcentralzone
 * @property integer $preservedislandinperiphery
 * @property integer $blindspot
 *
 * The followings are the available model relations:
 * @property Patientopthalmologicaldata $exam
 * @property Opthalmologicalvisualfieldtestfile[] $opthalmologicalvisualfieldtestfiles
 */
class Opthalmologicalvisualfieldtest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthalmologicalvisualfieldtest the static model class
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
		return 'opthalmologicalvisualfieldtest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('examid, performed, eye', 'required'),
			//array('examid, centralsensitivity, preservedcentralzone, preservedislandinperiphery, blindspot', 'numerical', 'integerOnly'=>true),
			//array('performed, device', 'length', 'max'=>14),
                       // array('preservedcentralzone','max'=>1000),
                        //array('preservedislandinperiphery','max'=>5000),
			//array('eye', 'length', 'max'=>5),
			//array('other, notperformedcomment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, examid, performed, device, eye, other, notperformedcomment, centralsensitivity, preservedcentralzone, preservedislandinperiphery, blindspot', 'safe', 'on'=>'search'),
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
			'exam' => array(self::BELONGS_TO, 'Patientopthalmologicaldata', 'examid'),
			'opthalmologicalvisualfieldtestfiles' => array(self::HAS_MANY, 'Opthalmologicalvisualfieldtestfile', 'testid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'examid' => 'Examid',
			'performed' => 'Performed',
			'device' => 'Device',
			'eye' => 'Eye',
			'other' => 'Other',
			'notperformedcomment' => 'Not performed',
			'centralsensitivity' => 'Central sensitivity, DB',
			'preservedcentralzone' => 'Preserved  central zone (III4e) deg2',
			'preservedislandinperiphery' => 'Preserved island in periphery (III4e) deg2',
			'blindspot' => 'Blind spot(I4e), deg2',
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
		$criteria->compare('examid',$this->examid);
		$criteria->compare('performed',$this->performed,true);
		$criteria->compare('device',$this->device,true);
		$criteria->compare('eye',$this->eye,true);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('notperformedcomment',$this->notperformedcomment,true);
		$criteria->compare('centralsensitivity',$this->centralsensitivity);
		$criteria->compare('preservedcentralzone',$this->preservedcentralzone);
		$criteria->compare('preservedislandinperiphery',$this->preservedislandinperiphery);
		$criteria->compare('blindspot',$this->blindspot);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}