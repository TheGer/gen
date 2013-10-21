<?php

/**
 * This is the model class for table "opthalmologicalfundusautofluortest".
 *
 * The followings are the available columns in table 'opthalmologicalfundusautofluortest':
 * @property integer $id
 * @property integer $examid
 * @property string $comments
 * @property string $eye
 * @property string $device
 * @property string $ring
 * @property integer $ringhorizontallength
 * @property string $patch
 * @property string $totalatropy
 *
 * The followings are the available model relations:
 * @property Patientopthalmologicaldata $exam
 * @property Opthfundusautofluortestfile[] $opthfundusautofluortestfiles
 */
class Opthalmologicalfundusautofluortest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthalmologicalfundusautofluortest the static model class
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
		return 'opthalmologicalfundusautofluortest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('examid, eye, device, ring, ringhorizontallength, patch, totalatropy', 'required'),
			array('examid, ringhorizontallength', 'numerical', 'integerOnly'=>true),
			array('eye', 'length', 'max'=>5),
			array('device', 'length', 'max'=>13),
			array('ring, patch, totalatropy', 'length', 'max'=>100),
			array('comments', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, examid, comments, eye, device, ring, ringhorizontallength, patch, totalatropy', 'safe', 'on'=>'search'),
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
			'opthfundusautofluortestfiles' => array(self::HAS_MANY, 'Opthfundusautofluortestfile', 'testid'),
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
			'comments' => 'Comments',
			'eye' => 'Eye',
			'device' => 'Device',
			'ring' => 'Ring',
			'ringhorizontallength' => 'Ring horizontal length',
			'patch' => 'Patch',
			'totalatropy' => 'Total atrophy',
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
		$criteria->compare('eye',$this->eye,true);
		$criteria->compare('device',$this->device,true);
		$criteria->compare('ring',$this->ring,true);
		$criteria->compare('ringhorizontallength',$this->ringhorizontallength);
		$criteria->compare('patch',$this->patch,true);
		$criteria->compare('totalatropy',$this->totalatropy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}