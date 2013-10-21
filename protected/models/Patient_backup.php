<?php

/**
 * This is the model class for table "patient".
 *
 * The followings are the available columns in table 'patient':
 * @property integer $id
 * @property string $systemid
 * @property string $gender
 * @property string $placeofbirth
 * @property string $dateofbirth
 * @property string $informedconsent
 * @property string $confirmedmutation
 * @property string $confirmedby
 * @property integer $diagnosis
 * @property string $establishedat
 * @property string $diagnosiskeys
 * @property string $description
 * @property string $secondarydiagnosisexisting
 * @property string $secondarydiagnosiskeys
 * @property string $othercomments
 * @property string $scotome
 * @property integer $nightblindnessage
 * @property string $phosphenes
 * @property integer $decreasedvisualacage
 * @property string $sensibilitytolight
 * @property integer $sensibilitytolightage
 * @property string $clearvision
 * @property integer $colourvisionage
 * @property string $sidevision
 * @property integer $sidevisionage
 * @property string $readingdifficulties
 * @property integer $nystagmus
 * @property string $parentsorigin
 * @property string $sporadicorfamily
 * @property string $cosanguinity
 * @property integer $numberofaffectedfamilymembers
 * @property string $children
 * @property integer $numberofchildrenaffected
 * @property integer $numberofchildrennonaffected
 * @property integer $numberofchildrenunknownstatus
 * @property string $siblings
 * @property integer $numberofsiblingsaffected
 * @property integer $numberofsiblingsnotaffected
 * @property integer $numberofsiblingsunknown
 * @property string $twins
 * @property integer $numberoftwinsaffected
 * @property integer $numberoftwinsnotaffected
 * @property integer $numberoftwinsunknown
 * @property string $pedigreeavailable
 * 
 * 
 *
 * The followings are the available model relations:
 * @property Doctorpatient[] $doctorpatients
 * @property Patientcenter $patientcenter
 * @property Patientfamily[] $patientfamilies
 * @property Patientfamilydetails[] $patientfamilydetails
 * @property Patientgenetics[] $patientgenetics
 * @property Patientopthalmologicaldata[] $patientopthalmologicaldatas
 * @property Patientpedigreefile[] $patientpedigreefiles
 * @property Patientstaticfile[] $patientstaticfiles
 */
class Patient extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Patient the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'patient';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            //array('systemid, gender, placeofbirth, dateofbirth, informedconsent, confirmedmutation, confirmedby, diagnosis, establishedat, diagnosiskeys, description, secondarydiagnosiskeys, othercomments, scotome, phosphenes, sensibilitytolight, clearvision, sidevision, readingdifficulties, parentsorigin, sporadicorfamily, cosanguinity, children, siblings, numberofsiblingsaffected, numberofsiblingsnotaffected, numberofsiblingsunknown, twins, numberoftwinsaffected, numberoftwinsnotaffected, numberoftwinsunknown, pedigreeavailable', 'required'),
            array('diagnosis, nightblindnessage, decreasedvisualacage, sensibilitytolightage, colourvisionage, sidevisionage, nystagmus, numberofaffectedfamilymembers, numberofchildrenaffected, numberofchildrennonaffected, numberofchildrenunknownstatus, numberofsiblingsaffected, numberofsiblingsnotaffected, numberofsiblingsunknown, numberoftwinsaffected, numberoftwinsnotaffected, numberoftwinsunknown', 'numerical', 'integerOnly' => true, 'max'=>100),
            array('establishedat,dateofbirth,systemid, gender, placeofbirth, informedconsent, confirmedmutation, confirmedby, scotome, phosphenes, sensibilitytolight, clearvision, sidevision, readingdifficulties, parentsorigin, siblings, twins, pedigreeavailable', 'length', 'max' => 100),
            array('sporadicorfamily, cosanguinity, children', 'length', 'max' => 14),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('establishedat,dateofbirth,id, systemid, gender, placeofbirth, dateofbirth, informedconsent, confirmedmutation, confirmedby, diagnosis, establishedat, diagnosiskeys, description, secondarydiagnosiskeys, othercomments, scotome, nightblindnessage, phosphenes, decreasedvisualacage, sensibilitytolight, sensibilitytolightage, clearvision, colourvisionage, sidevision, sidevisionage, readingdifficulties, nystagmus, parentsorigin, sporadicorfamily, cosanguinity, numberofaffectedfamilymembers, children, numberofchildrenaffected, numberofchildrennonaffected, numberofchildrenunknownstatus, siblings, numberofsiblingsaffected, numberofsiblingsnotaffected, numberofsiblingsunknown, twins, numberoftwinsaffected, numberoftwinsnotaffected, numberoftwinsunknown, pedigreeavailable', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'doctorpatients' => array(self::MANY_MANY, 'Patient', 'doctorpatient(doctorid,patientid)'),
            'patientcenters' => array(self::MANY_MANY, 'Center', 'patientcenter(patientid,centeridA)'),
            'patientfamilies' => array(self::MANY_MANY, 'Family', 'patientfamily(patientid,familyid)'),
            'patientfamilydetails' => array(self::HAS_MANY, 'Patientfamilydetails', 'patientid'),
            'patientopthalmologicaldatas' => array(self::HAS_MANY, 'Patientopthalmologicaldata', 'patientid'),
            'patientpedigreefiles' => array(self::HAS_MANY, 'Patientpedigreefile', 'patientid'),
            'patientstaticfiles' => array(self::HAS_MANY, 'Patientstaticfile', 'patientid'),
            'patientgenetics' => array(self::HAS_MANY, 'Patientgenetics', 'patientid'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'systemid' => 'Systemid',
            'gender' => 'Gender',
            'placeofbirth' => 'Place of birth',
            'dateofbirth' => 'Date of birth',
            'informedconsent' => 'Informed consent',
            'confirmedmutation' => 'Confirmed mutation',
            'confirmedby' => 'Confirmed by',
            'diagnosis' => 'Diagnosis',
            'establishedat' => 'Established at',
            'diagnosiskeys' => 'Diagnosis keys',
            'description' => 'Description',
            'secondarydiagnosisexisting' => 'Existing',
            'secondarydiagnosiskeys' => 'Secondary diagnosis keys',
            'othercomments' => 'Comments',
            'scotome' => 'Scotome Perception',
            'nightblindnessage' => 'Night blindness age',
            'phosphenes' => 'Phosphenes Perception',
            'decreasedvisualacage' => 'Decreased visual acuity',
            'sensibilitytolight' => 'Sensibility to light',
            'sensibilitytolightage' => 'Sensibility to lightage',
            'clearvision' => 'Clear vision',
            'colourvisionage' => 'Colour vision',
            'sidevision' => 'Side vision',
            'sidevisionage' => 'Restriction of Visual Field',
            'readingdifficulties' => 'Reading difficulties',
            'nystagmus' => 'Reading difficulties age',
            'parentsorigin' => 'Parents origin',
            'sporadicorfamily' => 'Sporadic or family',
            'cosanguinity' => 'Cosanguinity',
            'numberofaffectedfamilymembers' => 'Number of affected family members',
            'children' => 'Children',
            'numberofchildrenaffected' => 'Number of children affected',
            'numberofchildrennonaffected' => 'Number of children non affected',
            'numberofchildrenunknownstatus' => 'Number of children unknown status',
            'siblings' => 'Siblings',
            'numberofsiblingsaffected' => 'Number of siblings affected',
            'numberofsiblingsnotaffected' => 'Number of siblings not affected',
            'numberofsiblingsunknown' => 'Number of siblings unknown',
            'twins' => 'Twins',
            'numberoftwinsaffected' => 'Number of twins affected',
            'numberoftwinsnotaffected' => 'Number of twins not affected',
            'numberoftwinsunknown' => 'Number of twins unknown',
            'pedigreeavailable' => 'Pedigree available',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('systemid', $this->systemid, true);
        $criteria->compare('gender', $this->gender, true);
        $criteria->compare('placeofbirth', $this->placeofbirth, true);
        $criteria->compare('dateofbirth', strtotime($this->dateofbirth));
        $criteria->compare('informedconsent', $this->informedconsent, true);
        $criteria->compare('confirmedmutation', $this->confirmedmutation, true);
        $criteria->compare('confirmedby', $this->confirmedby, true);
        $criteria->compare('diagnosis', $this->diagnosis);
        $criteria->compare('establishedat', strtotime($this->establishedat));
        $criteria->compare('diagnosiskeys', $this->diagnosiskeys, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('secondarydiagnosiskeys', $this->secondarydiagnosiskeys, true);
        $criteria->compare('othercomments', $this->othercomments, true);
        $criteria->compare('scotome', $this->scotome, true);
        $criteria->compare('nightblindnessage', $this->nightblindnessage);
        $criteria->compare('phosphenes', $this->phosphenes, true);
        $criteria->compare('decreasedvisualacage', $this->decreasedvisualacage);
        $criteria->compare('sensibilitytolight', $this->sensibilitytolight, true);
        $criteria->compare('sensibilitytolightage', $this->sensibilitytolightage);
        $criteria->compare('clearvision', $this->clearvision, true);
        $criteria->compare('colourvisionage', $this->colourvisionage);
        $criteria->compare('sidevision', $this->sidevision, true);
        $criteria->compare('sidevisionage', $this->sidevisionage);
        $criteria->compare('readingdifficulties', $this->readingdifficulties, true);
        $criteria->compare('nystagmus', $this->nystagmus);
        $criteria->compare('parentsorigin', $this->parentsorigin, true);
        $criteria->compare('sporadicorfamily', $this->sporadicorfamily, true);
        $criteria->compare('cosanguinity', $this->cosanguinity, true);
        $criteria->compare('numberofaffectedfamilymembers', $this->numberofaffectedfamilymembers);
        $criteria->compare('children', $this->children, true);
        $criteria->compare('numberofchildrenaffected', $this->numberofchildrenaffected);
        $criteria->compare('numberofchildrennonaffected', $this->numberofchildrennonaffected);
        $criteria->compare('numberofchildrenunknownstatus', $this->numberofchildrenunknownstatus);
        $criteria->compare('siblings', $this->siblings, true);
        $criteria->compare('numberofsiblingsaffected', $this->numberofsiblingsaffected);
        $criteria->compare('numberofsiblingsnotaffected', $this->numberofsiblingsnotaffected);
        $criteria->compare('numberofsiblingsunknown', $this->numberofsiblingsunknown);
        $criteria->compare('twins', $this->twins, true);
        $criteria->compare('numberoftwinsaffected', $this->numberoftwinsaffected);
        $criteria->compare('numberoftwinsnotaffected', $this->numberoftwinsnotaffected);
        $criteria->compare('numberoftwinsunknown', $this->numberoftwinsunknown);
        $criteria->compare('pedigreeavailable', $this->pedigreeavailable, true);
   //  $criteria->compare('centeridA', $this->patientcenters->centeridA, true);
        $criteria->with = array('patientcenters');
        $criteria->together=true;
               
        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    protected function beforeSave() {
        $this->dateofbirth = date('Y-m-d', strtotime($this->dateofbirth));
        $this->establishedat = date('Y-m-d', strtotime($this->establishedat));
        return TRUE;
    }

    protected function afterFind() {
        $this->dateofbirth = date('d-m-Y', strtotime($this->dateofbirth));
        $this->establishedat = date('d-m-Y', strtotime($this->establishedat));
        return TRUE;
    }

}