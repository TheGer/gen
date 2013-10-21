<?php

/**
 * This is the model class for table "opthalmologicalmfergtest".
 *
 * The followings are the available columns in table 'opthalmologicalmfergtest':
 * @property integer $id
 * @property integer $examid
 * @property string $eye
 * @property string $nonperformedcomments
 * @property string $device
 * @property double $pupilsizeendoftest
 * @property string $other
 * @property integer $Concentricring1
 * @property integer $Concentricring2
 * @property integer $Concentricring3
 *
 * The followings are the available model relations:
 * @property Patientopthalmologicaldata $exam
 * @property Opthalmologicalmfergtestfile[] $opthalmologicalmfergtestfiles
 */
class Opthalmologicalmfergtest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthalmologicalmfergtest the static model class
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
		return 'opthalmologicalmfergtest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('examid, eye, other, Concentricring1, Concentricring2, Concentricring3', 'required'),
			array('examid, Concentricring1, Concentricring2, Concentricring3', 'numerical', 'integerOnly'=>true),
			array('pupilsizeendoftest', 'numerical'),
			array('eye', 'length', 'max'=>5),
			array('device', 'length', 'max'=>13),
			array('other', 'length', 'max'=>100),
			array('nonperformedcomments', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, examid, eye, nonperformedcomments, device, pupilsizeendoftest, other, Concentricring1, Concentricring2, Concentricring3', 'safe', 'on'=>'search'),
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
			'opthalmologicalmfergtestfiles' => array(self::HAS_MANY, 'Opthalmologicalmfergtestfile', 'testid'),
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
			'eye' => 'Eye',
			'nonperformedcomments' => 'Non performed comments',
			'device' => 'Device',
			'pupilsizeendoftest' => 'Pupil size end of test',
			'other' => 'Other',
			'Concentricring1' => 'Concentricring 1 Amplitude N1P1, nV',
			'Concentricring2' => 'Concentricring 2 Amplitude N1P1, nV',
			'Concentricring3' => 'Concentricring 3 Amplitude N1P1, nV',
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
		$criteria->compare('eye',$this->eye,true);
		$criteria->compare('nonperformedcomments',$this->nonperformedcomments,true);
		$criteria->compare('device',$this->device,true);
		$criteria->compare('pupilsizeendoftest',$this->pupilsizeendoftest);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('Concentricring1',$this->Concentricring1);
		$criteria->compare('Concentricring2',$this->Concentricring2);
		$criteria->compare('Concentricring3',$this->Concentricring3);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}