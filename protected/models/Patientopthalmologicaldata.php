<?php

/**
 * This is the model class for table "patientopthalmologicaldata".
 *
 * The followings are the available columns in table 'patientopthalmologicaldata':
 * @property integer $id
 * @property integer $patientid
 * @property string $examinationdate
 *
 * The followings are the available model relations:
 * @property Opthalmologicalcolorvisiontest[] $opthalmologicalcolorvisiontests
 * @property Opthalmologicalcolorvisiontest2[] $opthalmologicalcolorvisiontests2
 * @property Opthalmologicalergtest[] $opthalmologicalergtests
 * @property Opthalmologicalfsttest[] $opthalmologicalfsttests
 * @property Opthalmologicalfundusautofluortest[] $opthalmologicalfundusautofluortests
 * @property Opthalmologicalmfergtest[] $opthalmologicalmfergtests
 * @property Opthalmologicalmfpergtest[] $opthalmologicalmfpergtests
 * @property Opthalmologicalmicroperimetrytest[] $opthalmologicalmicroperimetrytests
 * @property Opthalmologicalocttest[] $opthalmologicalocttests
 * @property Opthalmologicaltonometrytest[] $opthalmologicaltonometrytests
 * @property Opthalmologicalvisualacuitytest[] $opthalmologicalvisualacuitytests
 * @property Opthalmologicalvisualfieldtest[] $opthalmologicalvisualfieldtests
 * @property Opthfundusphotographytest[] $opthfundusphotographytests
 * @property Patient $patient
 */
class Patientopthalmologicaldata extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Patientopthalmologicaldata the static model class
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
		return 'patientopthalmologicaldata';
	}

        
         protected function beforeSave() {
        $this->examinationdate = date('Y-m-d', strtotime($this->examinationdate));
        
        return TRUE;
    }

    protected function afterFind() {
        $this->examinationdate = date('Y-m-d', strtotime($this->examinationdate));
        return TRUE;
    }
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('patientid, examinationdate', 'required'),
			array('patientid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, patientid, examinationdate', 'safe', 'on'=>'search'),
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
			'opthalmologicalcolorvisiontests' => array(self::HAS_MANY, 'Opthalmologicalcolorvisiontest', 'testid','order'=>'eye DESC'),
                    'opthalmologicalcolorvisiontests2' => array(self::HAS_MANY, 'Opthalmologicalcolorvisiontest', 'testid','order'=>'eye DESC'),
			'opthalmologicalergtests' => array(self::HAS_MANY, 'Opthalmologicalergtest', 'examid','order'=>'eye DESC'),
			'opthalmologicalfsttests' => array(self::HAS_MANY, 'Opthalmologicalfsttest', 'examid','order'=>'eye DESC'),
			'opthalmologicalfundusautofluortests' => array(self::HAS_MANY, 'Opthalmologicalfundusautofluortest', 'examid','order'=>'eye DESC'),
			'opthalmologicalmfergtests' => array(self::HAS_MANY, 'Opthalmologicalmfergtest', 'examid','order'=>'eye DESC'),
			'opthalmologicalmfpergtests' => array(self::HAS_MANY, 'Opthalmologicalmfpergtest', 'examid','order'=>'eye DESC'),
			'opthalmologicalmicroperimetrytests' => array(self::HAS_MANY, 'Opthalmologicalmicroperimetrytest', 'examid','order'=>'eye DESC'),
			'opthalmologicalocttests' => array(self::HAS_MANY, 'Opthalmologicalocttest', 'examid','order'=>'eye DESC'),
			'opthalmologicaltonometrytests' => array(self::HAS_MANY, 'Opthalmologicaltonometrytest', 'testid','order'=>'eye DESC'),
			'opthalmologicalvisualacuitytests' => array(self::HAS_MANY, 'Opthalmologicalvisualacuitytest', 'testid','order'=>'eye DESC'),
			'opthalmologicalvisualfieldtests' => array(self::HAS_MANY, 'Opthalmologicalvisualfieldtest', 'examid','order'=>'eye DESC'),
			'opthfundusphotographytests' => array(self::HAS_MANY, 'Opthfundusphotographytest', 'examid','order'=>'eye DESC'),
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
			'examinationdate' => 'Examination date',
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
		$criteria->compare('examinationdate',$this->examinationdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}