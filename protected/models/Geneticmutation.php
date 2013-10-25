<?php

/**
 * This is the model class for table "geneticmutation".
 *
 * The followings are the available columns in table 'geneticmutation':
 * @property integer $id
 * @property integer $patientgeneid
 * @property integer $patientlocusid
 * @property integer $geneid
 * @property string $firstallel
 * @property string $firstallelmutation
 * @property string $secondallel
 * @property string $secondallelmutation
 * @property string $thirdallel
 * @property string $thirdallelmutation
 * @property string $fourthallel
 * @property string $fourthallelmutation
 * @property string $mutationtype
 * @property string $responsiblegene
 * @property string $nomenclaturedna
 * @property string $nomenclatureprotein
 * @property string $classificationlist
 * @property string $typeofmutation
 *
 * The followings are the available model relations:
 * @property Patientgenetics $patientgene
 */
class Geneticmutation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Geneticmutation the static model class
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
		return 'geneticmutation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patientgeneid, patientlocusid, firstallel, secondallel', 'required'),
			array('patientgeneid, patientlocusid', 'numerical', 'integerOnly'=>true),
			array('firstallel, secondallel, thirdallel, fourthallel', 'length', 'max'=>14),
			array('firstallelmutation, secondallelmutation, thirdallelmutation, fourthallelmutation', 'length', 'max'=>45),
			array('mutationtype', 'length', 'max'=>17),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, patientgeneid,responsiblegene,nomenclaturedna,nomenclatureprotein,classificationlist,typeofmutation, patientlocusid, firstallel, firstallelmutation, secondallel, secondallelmutation, thirdallel, thirdallelmutation, fourthallel, fourthallelmutation, mutationtype', 'safe', 'on'=>'search'),
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
			'patientgene' => array(self::BELONGS_TO, 'Patientgenetics', 'patientgeneid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'patientgeneid' => 'Patient gene id',
			'patientlocusid' => 'Patient locus',
			'firstallel' => 'First allel',
			'firstallelmutation' => 'First allel mutation',
			'secondallel' => 'Second allel',
			'secondallelmutation' => 'Second allel mutation',
			'thirdallel' => 'Third allel',
			'thirdallelmutation' => 'Third allel mutation',
			'fourthallel' => 'Fourth allel',
			'fourthallelmutation' => 'Fourth allel mutation',
			'mutationtype' => 'Mutation type',
                        'geneid'=>'Gene',
                        'responsiblegene'=>'Responsible gene',
                        'nomenclaturedna'=>'Nomenclature DNA',
                        'nomenclatureprotein'=>'Nomenclature Protein',
                        'classificationlist'=>'Classification List',
                        'typeofmutation'=>'Type of mutation',
                    
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
		$criteria->compare('patientgeneid',$this->patientgeneid);
		$criteria->compare('patientlocusid',$this->patientlocusid);
		$criteria->compare('firstallel',$this->firstallel,true);
		$criteria->compare('firstallelmutation',$this->firstallelmutation,true);
		$criteria->compare('secondallel',$this->secondallel,true);
		$criteria->compare('secondallelmutation',$this->secondallelmutation,true);
		$criteria->compare('thirdallel',$this->thirdallel,true);
		$criteria->compare('thirdallelmutation',$this->thirdallelmutation,true);
		$criteria->compare('fourthallel',$this->fourthallel,true);
		$criteria->compare('fourthallelmutation',$this->fourthallelmutation,true);
		$criteria->compare('mutationtype',$this->mutationtype,true);
                $criteria->compare('responsiblegene',$this->responsiblegene,true);
                $criteria->compare('nomenclaturedna',$this->nomenclaturedna,true);
                $criteria->compare('classificationlist',$this->classificationlist,true);
                $criteria->compare('typeofmutation',$this->typeofmutation,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}