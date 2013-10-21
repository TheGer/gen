<?php

/**
 * This is the model class for table "opthalmologicalvisualacuitytest".
 *
 * The followings are the available columns in table 'opthalmologicalvisualacuitytest':
 * @property integer $id
 * @property integer $testid
 * @property string $eye
 * @property string $type
 * @property integer $etdrsnumberofletters
 * @property string $learesult
 * @property string $fingercount
 * @property string $handmovement
 * @property string $lightperception
 * @property string $refractiontype
 * @property string $notperformedcomment
 * @property double $refractionshere
 * @property double $refractioncylindre
 * @property integer $refractionaxis
 * @property string $ioptype
 * @property integer $iop
 *
 * The followings are the available model relations:
 * @property Patientopthalmologicaldata $test
 */
class Opthalmologicalvisualacuitytest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthalmologicalvisualacuitytest the static model class
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
		return 'opthalmologicalvisualacuitytest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('testid, eye, type', 'required'),
			array('testid, etdrsnumberofletters, refractionaxis, iop', 'numerical', 'integerOnly'=>true),
			array('refractionshere, refractioncylindre', 'numerical'),
			array('eye', 'length', 'max'=>5),
			array('type', 'length', 'max'=>16),
			array('learesult', 'length', 'max'=>45),
			array('fingercount, handmovement, lightperception', 'length', 'max'=>14),
			array('refractiontype', 'length', 'max'=>17),
			array('ioptype', 'length', 'max'=>13),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, testid, eye, type, etdrsnumberofletters, learesult, fingercount, handmovement, lightperception, refractiontype, notperformedcomment, refractionshere, refractioncylindre, refractionaxis, ioptype, iop', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'etdrsnumberofletters' => 'Score AV ETDRS',
			'learesult' => 'Equivalent AV Snellen',
			'fingercount' => 'Finger count',
			'handmovement' => 'Hand movement',
			'lightperception' => 'Light perception',
                         'refractiontype'=>'Refraction Type',
                         'notperformedcomment'=>'Comments',
                         'refractionshere'=>'Refraction Shere',
                         'refractioncylindre'=>'Refraction Cylindre',
                         'refractionaxis'=>'Refraction Axis',
                         'ioptype'=>'Intraocular Pressure Test type',
                         'iop'=>'Intraocular Pressure(mm,Hg)'
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('etdrsnumberofletters',$this->etdrsnumberofletters);
		$criteria->compare('learesult',$this->learesult,true);
		$criteria->compare('fingercount',$this->fingercount,true);
		$criteria->compare('handmovement',$this->handmovement,true);
		$criteria->compare('lightperception',$this->lightperception,true);
		$criteria->compare('refractiontype',$this->refractiontype,true);
		$criteria->compare('notperformedcomment',$this->notperformedcomment,true);
		$criteria->compare('refractionshere',$this->refractionshere);
		$criteria->compare('refractioncylindre',$this->refractioncylindre);
		$criteria->compare('refractionaxis',$this->refractionaxis);
		$criteria->compare('ioptype',$this->ioptype,true);
		$criteria->compare('iop',$this->iop);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}