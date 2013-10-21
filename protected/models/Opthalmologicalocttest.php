<?php

/**
 * This is the model class for table "opthalmologicalocttest".
 *
 * The followings are the available columns in table 'opthalmologicalocttest':
 * @property integer $id
 * @property integer $examid
 * @property string $eye
 * @property string $notperformedcomments
 * @property string $device
 * @property double $fovealthickness
 * @property string $othercomments
 * @property integer $centralmaculathickness
 * @property string $glosis
 * @property string $epiretinalmembrane
 * @property string $maculahole
 * @property string $maculaedema
 * @property string $cysticchanges
 * @property string $preservedisos
 * @property integer $isoshorizontallength
 *
 * The followings are the available model relations:
 * @property Patientopthalmologicaldata $exam
 * @property Opthalmologicalocttestfile[] $opthalmologicalocttestfiles
 */
class Opthalmologicalocttest extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opthalmologicalocttest the static model class
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
		return 'opthalmologicalocttest';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('examid, eye, centralmaculathickness, glosis, epiretinalmembrane, maculahole, maculaedema, cysticchanges, preservedisos, isoshorizontallength', 'required'),
			array('examid, centralmaculathickness, isoshorizontallength', 'numerical', 'integerOnly'=>true),
			array('fovealthickness', 'numerical'),
			array('eye', 'length', 'max'=>5),
			array('device', 'length', 'max'=>13),
			array('glosis, epiretinalmembrane, maculahole, maculaedema, cysticchanges, preservedisos', 'length', 'max'=>3),
			array('notperformedcomments, othercomments', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, examid, eye, notperformedcomments, device, fovealthickness, othercomments, centralmaculathickness, glosis, epiretinalmembrane, maculahole, maculaedema, cysticchanges, preservedisos, isoshorizontallength', 'safe', 'on'=>'search'),
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
			'opthalmologicalocttestfiles' => array(self::HAS_MANY, 'Opthalmologicalocttestfile', 'testid'),
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
			'notperformedcomments' => 'Not performed comments',
			'device' => 'Device',
			'fovealthickness' => 'Foveal thickness',
			'othercomments' => 'Other comments',
			'centralmaculathickness' => 'Central macula thickness',
			'glosis' => 'Glosis',
			'epiretinalmembrane' => 'Epiretinal membrane',
			'maculahole' => 'Macula hole',
			'maculaedema' => 'Macula edema',
			'cysticchanges' => 'Cystic changes',
			'preservedisos' => 'Preserved IS/OS',
			'isoshorizontallength' => 'IS/OS horizontal length',
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
		$criteria->compare('notperformedcomments',$this->notperformedcomments,true);
		$criteria->compare('device',$this->device,true);
		$criteria->compare('fovealthickness',$this->fovealthickness);
		$criteria->compare('othercomments',$this->othercomments,true);
		$criteria->compare('centralmaculathickness',$this->centralmaculathickness);
		$criteria->compare('glosis',$this->glosis,true);
		$criteria->compare('epiretinalmembrane',$this->epiretinalmembrane,true);
		$criteria->compare('maculahole',$this->maculahole,true);
		$criteria->compare('maculaedema',$this->maculaedema,true);
		$criteria->compare('cysticchanges',$this->cysticchanges,true);
		$criteria->compare('preservedisos',$this->preservedisos,true);
		$criteria->compare('isoshorizontallength',$this->isoshorizontallength);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}