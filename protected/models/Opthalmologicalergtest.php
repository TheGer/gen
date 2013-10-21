<?php

/**
 * This is the model class for table "opthalmologicalergtest".
 *
 * The followings are the available columns in table 'opthalmologicalergtest':
 * @property integer $id
 * @property integer $examid
 * @property string $comments
 * @property string $device
 * @property string $comments2
 * @property string $eye
 * @property string $other
 * @property string $notperformedcomment
 * @property integer $Skotopicamplitudeawave
 * @property integer $Skotopicamplitudebwave
 * @property integer $Photopicamplitudeawave
 * @property integer $Photopicamplitudebwave
 *
 * The followings are the available model relations:
 * @property Patientopthalmologicaldata $exam
 * @property Opthalmologicalergtestfile[] $opthalmologicalergtestfiles
 */
class Opthalmologicalergtest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthalmologicalergtest the static model class
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
		return 'opthalmologicalergtest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('examid, eye', 'required'),
			array('examid, Skotopicamplitudeawave, Skotopicamplitudebwave, Photopicamplitudeawave, Photopicamplitudebwave', 'numerical', 'integerOnly'=>true),
			array('device', 'length', 'max'=>13),
			array('eye', 'length', 'max'=>5),
			array('other', 'length', 'max'=>100),
			array('comments, comments2, notperformedcomment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, examid, comments, device, comments2, eye, other, notperformedcomment, Skotopicamplitudeawave, Skotopicamplitudebwave, Photopicamplitudeawave, Photopicamplitudebwave', 'safe', 'on'=>'search'),
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
			'opthalmologicalergtestfiles' => array(self::HAS_MANY, 'Opthalmologicalergtestfile', 'testid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'examid' => 'Exam id',
			'comments' => 'Comments',
			'device' => 'Device',
			'comments2' => 'Comments 2',
			'eye' => 'Eye',
			'other' => 'Other',
			'notperformedcomment' => 'Not performed comment',
			'Skotopicamplitudeawave' => 'Skotopic Amplitude a-wave, µV',
			'Skotopicamplitudebwave' => 'Skotopic Amplitude b-wave, µV',
			'Photopicamplitudeawave' => 'Photopic Amplitude a-wave, µV',
			'Photopicamplitudebwave' => 'Photopic Amplitude b-wave, µV',
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
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('device',$this->device,true);
		$criteria->compare('comments2',$this->comments2,true);
		$criteria->compare('eye',$this->eye,true);
		$criteria->compare('other',$this->other,true);
		$criteria->compare('notperformedcomment',$this->notperformedcomment,true);
		$criteria->compare('Skotopicamplitudeawave',$this->Skotopicamplitudeawave);
		$criteria->compare('Skotopicamplitudebwave',$this->Skotopicamplitudebwave);
		$criteria->compare('Photopicamplitudeawave',$this->Photopicamplitudeawave);
		$criteria->compare('Photopicamplitudebwave',$this->Photopicamplitudebwave);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}