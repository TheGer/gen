<?php

/**
 * This is the model class for table "geneticscreenedgene".
 *
 * The followings are the available columns in table 'geneticscreenedgene':
 * @property integer $id
 * @property integer $patientgeneid
 * @property integer $geneid
 * @property integer $testingmethodid
 * @property string $excluded
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property Patientgenetics $patientegene
 */
class Geneticscreenedgene extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Geneticscreenedgene the static model class
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
		return 'geneticscreenedgene';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patientgeneid, testingmethodid, excluded', 'required'),
			array('patientgeneid, testingmethodid,geneid', 'numerical', 'integerOnly'=>true),
			array('excluded', 'length', 'max'=>15),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id,geneid, patientegeneid, testingmethodid, excluded, comment', 'safe', 'on'=>'search'),
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
			'patientegeneid' => 'Patient gene id',
			'testingmethodid' => 'Testingmethod id',
			'excluded' => 'Excluded',
			'comment' => 'Comment',
                        'geneid' => 'Gene'
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
                $criteria->compare('geneid',$this->geneid);
		$criteria->compare('patientegeneid',$this->patientegeneid);
		$criteria->compare('testingmethodid',$this->testingmethodid);
		$criteria->compare('excluded',$this->excluded,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}