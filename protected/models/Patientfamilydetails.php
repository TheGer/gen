<?php

/**
 * This is the model class for table "patientfamilydetails".
 *
 * The followings are the available columns in table 'patientfamilydetails':
 * @property integer $id
 * @property integer $patientid
 * @property string $parentsorigin
 * @property string $sporadicorfamily
 * @property string $consanguinity
 * @property integer $numberofaffectedfamily
 * @property string $children
 * @property integer $numberofchildrenaffected
 * @property integer $numberofchildrennonaffected
 * @property integer $numberofchildrenunknownstatus
 * @property string $siblings
 * @property integer $numberofsiblingsaffected
 * @property integer $numberofsiblingsnonaffected
 * @property integer $numberofsiblingsunknownstatus
 * @property string $twins
 * @property integer $numberoftwinsaffected
 * @property integer $numberoftwinsnotaffected
 * @property integer $numberoftwinsunknownstatus
 * @property string $pedigreeavailable
 *
 * The followings are the available model relations:
 * @property Patient $patient
 */
class Patientfamilydetails extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Patientfamilydetails the static model class
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
		return 'patientfamilydetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patientid, parentsorigin, sporadicorfamily, consanguinity, numberofaffectedfamily, children, numberofchildrenaffected, siblings, twins, pedigreeavailable', 'required'),
			array('patientid, numberofaffectedfamily, numberofchildrenaffected, numberofchildrennonaffected, numberofchildrenunknownstatus, numberofsiblingsaffected, numberofsiblingsnonaffected, numberofsiblingsunknownstatus, numberoftwinsaffected, numberoftwinsnotaffected, numberoftwinsunknownstatus', 'numerical', 'integerOnly'=>true),
			array('parentsorigin', 'length', 'max'=>45),
			array('sporadicorfamily, consanguinity, children, siblings, twins, pedigreeavailable', 'length', 'max'=>14),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, patientid, parentsorigin, sporadicorfamily, consanguinity, numberofaffectedfamily, children, numberofchildrenaffected, numberofchildrennonaffected, numberofchildrenunknownstatus, siblings, numberofsiblingsaffected, numberofsiblingsnonaffected, numberofsiblingsunknownstatus, twins, numberoftwinsaffected, numberoftwinsnotaffected, numberoftwinsunknownstatus, pedigreeavailable', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'patientid' => 'Patient id',
			'parentsorigin' => 'Parent sorigin',
			'sporadicorfamily' => 'Sporadic or family',
			'consanguinity' => 'Consanguinity',
			'numberofaffectedfamily' => 'Number of affected family',
			'children' => 'Children',
			'numberofchildrenaffected' => 'Number of children affected',
			'numberofchildrennonaffected' => 'Number of children non affected',
			'numberofchildrenunknownstatus' => 'Number of children unknownstatus',
			'siblings' => 'Siblings',
			'numberofsiblingsaffected' => 'Number of siblings affected',
			'numberofsiblingsnonaffected' => 'Number of siblings non affected',
			'numberofsiblingsunknownstatus' => 'Number of siblings unknown status',
			'twins' => 'Twins',
			'numberoftwinsaffected' => 'Number of twins affected',
			'numberoftwinsnotaffected' => 'Number of twins not affected',
			'numberoftwinsunknownstatus' => 'Number of twins unknownstatus',
			'pedigreeavailable' => 'Pedigree available',
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
		$criteria->compare('patientid',$this->patientid);
		$criteria->compare('parentsorigin',$this->parentsorigin,true);
		$criteria->compare('sporadicorfamily',$this->sporadicorfamily,true);
		$criteria->compare('consanguinity',$this->consanguinity,true);
		$criteria->compare('numberofaffectedfamily',$this->numberofaffectedfamily);
		$criteria->compare('children',$this->children,true);
		$criteria->compare('numberofchildrenaffected',$this->numberofchildrenaffected);
		$criteria->compare('numberofchildrennonaffected',$this->numberofchildrennonaffected);
		$criteria->compare('numberofchildrenunknownstatus',$this->numberofchildrenunknownstatus);
		$criteria->compare('siblings',$this->siblings,true);
		$criteria->compare('numberofsiblingsaffected',$this->numberofsiblingsaffected);
		$criteria->compare('numberofsiblingsnonaffected',$this->numberofsiblingsnonaffected);
		$criteria->compare('numberofsiblingsunknownstatus',$this->numberofsiblingsunknownstatus);
		$criteria->compare('twins',$this->twins,true);
		$criteria->compare('numberoftwinsaffected',$this->numberoftwinsaffected);
		$criteria->compare('numberoftwinsnotaffected',$this->numberoftwinsnotaffected);
		$criteria->compare('numberoftwinsunknownstatus',$this->numberoftwinsunknownstatus);
		$criteria->compare('pedigreeavailable',$this->pedigreeavailable,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}