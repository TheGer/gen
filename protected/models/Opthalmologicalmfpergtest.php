<?php

/**
 * This is the model class for table "opthalmologicalmfpergtest".
 *
 * The followings are the available columns in table 'opthalmologicalmfpergtest':
 * @property integer $id
 * @property integer $examid
 * @property string $performed
 * @property string $eye
 * @property string $comments
 * @property string $device
 *
 * The followings are the available model relations:
 * @property Patientopthalmologicaldata $exam
 * @property Opthalmologicalmfpergtestfile[] $opthalmologicalmfpergtestfiles
 */
class Opthalmologicalmfpergtest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthalmologicalmfpergtest the static model class
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
		return 'opthalmologicalmfpergtest';
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
			array('examid', 'numerical', 'integerOnly'=>true),
			array('performed, device', 'length', 'max'=>14),
			array('eye', 'length', 'max'=>5),
			array('comments', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, examid, performed, eye, comments, device', 'safe', 'on'=>'search'),
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
			'opthalmologicalmfpergtestfiles' => array(self::HAS_MANY, 'Opthalmologicalmfpergtestfile', 'testid'),
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
			'eye' => 'Eye',
			'comments' => 'Comments',
			'device' => 'Device',
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
		$criteria->compare('eye',$this->eye,true);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('device',$this->device,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}