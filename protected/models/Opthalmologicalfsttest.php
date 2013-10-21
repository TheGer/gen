<?php

/**
 * This is the model class for table "opthalmologicalfsttest".
 *
 * The followings are the available columns in table 'opthalmologicalfsttest':
 * @property integer $id
 * @property integer $examid
 * @property string $performed
 * @property double $whitestimulusthreshold
 * @property double $whitestimuluserrorblanks
 * @property double $whitestimuluserrormax
 * @property double $bluestimulusthreshold
 * @property double $bluestimuluserrorblanks
 * @property double $bluestimuluserrormax
 * @property double $redstimulusthreshold
 * @property double $redstiumuluserrorblanks
 * @property double $redstimuluserrormax
 * @property string $eye
 *
 * The followings are the available model relations:
 * @property Patientopthalmologicaldata $exam
 */
class Opthalmologicalfsttest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthalmologicalfsttest the static model class
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
		return 'opthalmologicalfsttest';
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
			array('whitestimulusthreshold, whitestimuluserrorblanks, whitestimuluserrormax, bluestimulusthreshold, bluestimuluserrorblanks, bluestimuluserrormax, redstimulusthreshold, redstiumuluserrorblanks, redstimuluserrormax', 'numerical'),
			array('performed', 'length', 'max'=>14),
			array('eye', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, examid, performed, whitestimulusthreshold, whitestimuluserrorblanks, whitestimuluserrormax, bluestimulusthreshold, bluestimuluserrorblanks, bluestimuluserrormax, redstimulusthreshold, redstiumuluserrorblanks, redstimuluserrormax, eye', 'safe', 'on'=>'search'),
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
			'performed' => 'Performed',
			'whitestimulusthreshold' => 'White stimulus threshold',
			'whitestimuluserrorblanks' => 'White stimulus error blanks',
			'whitestimuluserrormax' => 'White stimulus error max',
			'bluestimulusthreshold' => 'Blue stimulus threshold',
			'bluestimuluserrorblanks' => 'Blue stimulus error blanks',
			'bluestimuluserrormax' => 'Blue stimulus error max',
			'redstimulusthreshold' => 'Red stimulus threshold',
			'redstiumuluserrorblanks' => 'Red stiumulus error blanks',
			'redstimuluserrormax' => 'Red stimulus error max',
			'eye' => 'Eye',
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
		$criteria->compare('whitestimulusthreshold',$this->whitestimulusthreshold);
		$criteria->compare('whitestimuluserrorblanks',$this->whitestimuluserrorblanks);
		$criteria->compare('whitestimuluserrormax',$this->whitestimuluserrormax);
		$criteria->compare('bluestimulusthreshold',$this->bluestimulusthreshold);
		$criteria->compare('bluestimuluserrorblanks',$this->bluestimuluserrorblanks);
		$criteria->compare('bluestimuluserrormax',$this->bluestimuluserrormax);
		$criteria->compare('redstimulusthreshold',$this->redstimulusthreshold);
		$criteria->compare('redstiumuluserrorblanks',$this->redstiumuluserrorblanks);
		$criteria->compare('redstimuluserrormax',$this->redstimuluserrormax);
		$criteria->compare('eye',$this->eye,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}