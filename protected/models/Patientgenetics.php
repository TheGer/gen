<?php

/**
 * This is the model class for table "patientgenetics".
 *
 * The followings are the available columns in table 'patientgenetics':
 * @property integer $id
 * @property integer $patientid
 * @property string $modeofinheritance
 * @property string $levelofcertainty
 * @property string $allellestatus
 * @property string $dnasample
 * @property string $screenedformutations
 * @property string $dateofscreening
 * @property string $responsiblemutation
 * @property Geneticscreenedgene[] $screenedgenes
 * @property Geneticmutation[] $mutations
 *
 * The followings are the available model relations:
 * @property Patient $patient
 * 
 */
class Patientgenetics extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Patientgenetics the static model class
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
		return 'patientgenetics';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patientid, modeofinheritance, allellestatus, dnasample', 'required'),
			array('patientid', 'numerical', 'integerOnly'=>true),
			array('modeofinheritance', 'length', 'max'=>22),
			array('levelofcertainty', 'length', 'max'=>25),
			array('allellestatus', 'length', 'max'=>20),
			array('dnasample, screenedformutations, responsiblemutation', 'length', 'max'=>14),
			array('dateofscreening', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, patientid, modeofinheritance, levelofcertainty, allellestatus, dnasample, screenedformutations, dateofscreening, responsiblemutation', 'safe', 'on'=>'search'),
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
                        'mutations' => array(self::HAS_MANY, 'Geneticmutation', 'patientgeneid'),
                        'screenedgenes' => array(self::HAS_MANY, 'Geneticscreenedgene', 'patientgeneid'),         
		);
	}
        
        
        protected function beforeSave() {
        $this->dateofscreening = date('Y-m-d', strtotime($this->dateofscreening));
        
        return TRUE;
    }

    protected function afterFind() {
        $this->dateofscreening = date('d-m-Y', strtotime($this->dateofscreening));
        
        return TRUE;
    }
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'patientid' => 'Patient id',
			'modeofinheritance' => 'Mode of inheritance',
			'levelofcertainty' => 'Level of certainty',
			'allellestatus' => 'Allelle status',
			'dnasample' => 'DNA sample',
			'screenedformutations' => 'Screened for mutations',
			'dateofscreening' => 'Date of screening',
			'responsiblemutation' => 'Responsible mutation',
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
		$criteria->compare('modeofinheritance',$this->modeofinheritance,true);
		$criteria->compare('levelofcertainty',$this->levelofcertainty,true);
		$criteria->compare('allellestatus',$this->allellestatus,true);
		$criteria->compare('dnasample',$this->dnasample,true);
		$criteria->compare('screenedformutations',$this->screenedformutations,true);
		$criteria->compare('dateofscreening',$this->dateofscreening,true);
		$criteria->compare('responsiblemutation',$this->responsiblemutation,true);
		

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}