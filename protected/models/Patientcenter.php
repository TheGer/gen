<?php

/**
 * This is the model class for table "patientcenter".
 *
 * The followings are the available columns in table 'patientcenter':
 * @property integer $patientcenterid
 * @property integer $centeridA
 * @property integer $centeridB
 * @property integer $centeridC
 * @property string $doctoridA
 * @property string $doctoridB
 * @property string $doctoridC
 * @property string $systemid
 * @property integer $patientid
 *
 * The followings are the available model relations:
 * @property Patient $patient
 * @property Center $centeridA0
 */
class Patientcenter extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Patientcenter the static model class
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
		return 'patientcenter';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('centeridA, doctoridA, patientid', 'required'),
			array('patientcenterid, centeridA, centeridB, centeridC, patientid', 'numerical', 'integerOnly'=>true),
			array('doctoridA, doctoridB, doctoridC, systemid', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('patientcenterid, centeridA, centeridB, centeridC, doctoridA, doctoridB, doctoridC, systemid, patientid', 'safe', 'on'=>'search'),
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
			'patient' => array(self::BELONGS_TO, 'Patient', 'patientid'),
			'centeridA0' => array(self::BELONGS_TO, 'Center', 'centeridA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'patientcenterid' => 'Patient center id',
			'centeridA' => 'Centerid A',
			'centeridB' => 'Centerid B',
			'centeridC' => 'Centerid C',
			'doctoridA' => 'Doctorid A',
			'doctoridB' => 'Doctorid B',
			'doctoridC' => 'Doctorid C',
			'systemid' => 'System id',
			'patientid' => 'Patient id',
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

		$criteria->compare('patientcenterid',$this->patientcenterid);
		$criteria->compare('centeridA',$this->centeridA);
		$criteria->compare('centeridB',$this->centeridB);
		$criteria->compare('centeridC',$this->centeridC);
		$criteria->compare('doctoridA',$this->doctoridA,true);
		$criteria->compare('doctoridB',$this->doctoridB,true);
		$criteria->compare('doctoridC',$this->doctoridC,true);
		$criteria->compare('systemid',$this->systemid,true);
		$criteria->compare('patientid',$this->patientid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}