<?php

/**
 * This is the model class for table "opthalmologicalcolorvisiontest".
 *
 * The followings are the available columns in table 'opthalmologicalcolorvisiontest':
 * @property integer $id
 * @property integer $testid
 * @property string $eye
 * @property string $performed
 * @property string $type
 * @property integer $confusionindex
 * @property integer $angle
 * @property string $notperformedcomment
 *
 * The followings are the available model relations:
 * @property Patientopthalmologicaldata $test
 */
class Opthalmologicalcolorvisiontest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthalmologicalcolorvisiontest the static model class
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
		return 'opthalmologicalcolorvisiontest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('testid, eye', 'required'),
			array('testid, confusionindex, angle', 'numerical', 'integerOnly'=>true),
			array('eye', 'length', 'max'=>5),
			array('performed', 'length', 'max'=>14),
			array('type', 'length', 'max'=>22),
			array('notperformedcomment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, testid, eye, performed, type, confusionindex, angle, notperformedcomment', 'safe', 'on'=>'search'),
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
			'test' => array(self::BELONGS_TO, 'Patientopthalmologicaldata', 'testid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'testid' => 'Test id',
			'eye' => 'Eye',
			'performed' => 'Performed',
			'type' => 'Type',
			'confusionindex' => 'Confusion index',
			'angle' => 'Angle',
			'notperformedcomment' => 'Not performed comment',
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
		$criteria->compare('testid',$this->testid);
		$criteria->compare('eye',$this->eye,true);
		$criteria->compare('performed',$this->performed,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('confusionindex',$this->confusionindex);
		$criteria->compare('angle',$this->angle);
		$criteria->compare('notperformedcomment',$this->notperformedcomment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}