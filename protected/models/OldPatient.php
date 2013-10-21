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
 * @property integer $scotome
 * @property integer $nightblindnessage
 * @property integer $phosphenes
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
 * @property integer $cataractod
 * @property integer $cataractos
 * @property string $othersurgery
 * @property string $surgerycomments
 * @property integer $opthalmologytrauma
 * @property integer $opthalmologyinfection
 * @property string $actualvisiualrehabilitation
 * @property integer $walkingage
 * @property integer $articulationage
 * @property integer $hearingproblems
 * @property string $hearingcharacter
 * @property string $hearingproblemslevel
 * @property string $communcationmode
 * @property integer $hearingdevicead
 * @property integer $hearingdeviceas
 * @property integer $cochlearad
 * @property integer $cochlearas
 *
 * The followings are the available model relations:
 * @property Doctorpatient[] $doctorpatients
 * @property Patientcenter[] $patientcenters
 * @property Patientcenter $patientcenterida
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
       //     array('hearingproblemslevel, communcationmode, hearingdevicead, hearingdeviceas, cochlearad, cochlearas', 'required'),
            array('diagnosis, scotome, nightblindnessage, phosphenes, decreasedvisualacage, sensibilitytolightage, colourvisionage, sidevisionage, nystagmus, numberofaffectedfamilymembers, numberofchildrenaffected, numberofchildrennonaffected, numberofchildrenunknownstatus, numberofsiblingsaffected, numberofsiblingsnotaffected, numberofsiblingsunknown, numberoftwinsaffected, numberoftwinsnotaffected, numberoftwinsunknown, cataractod, cataractos, opthalmologytrauma, opthalmologyinfection, walkingage, articulationage, hearingproblems, cochlearad, cochlearas,height,weight', 'numerical', 'integerOnly' => true),
            array('systemid, gender, placeofbirth, informedconsent, confirmedby, secondarydiagnosisexisting, sensibilitytolight, clearvision, sidevision, readingdifficulties, parentsorigin, siblings, twins,hearingdeviceas,pedigreeavailable, othersurgery,participationform,verification,dateofsignedform,actualsystemictreatment,actualvitamin,surgeries,traumas,systemicinfections', 'length', 'max' => 100),
            array('confirmedmutation', 'length', 'max' => 3),
            array('sporadicorfamily, cosanguinity, children', 'length', 'max' => 14),
            array('actualvisiualrehabilitation, communcationmode', 'length', 'max' => 7),
            array('hearingcharacter', 'length', 'max' => 11),
            array('hearingproblemslevel', 'length', 'max' => 8),
            array('dateofbirth, establishedat, diagnosiskeys, description, secondarydiagnosiskeys, othercomments, surgerycomments', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, systemid, gender, placeofbirth, dateofbirth, informedconsent, confirmedmutation, confirmedby, diagnosis, establishedat, diagnosiskeys, description, secondarydiagnosisexisting, secondarydiagnosiskeys, othercomments, scotome, nightblindnessage, phosphenes, decreasedvisualacage, sensibilitytolight, sensibilitytolightage, clearvision, colourvisionage, sidevision, sidevisionage, readingdifficulties, nystagmus, parentsorigin, sporadicorfamily, cosanguinity, numberofaffectedfamilymembers, children, numberofchildrenaffected, numberofchildrennonaffected, numberofchildrenunknownstatus, siblings, numberofsiblingsaffected, numberofsiblingsnotaffected, numberofsiblingsunknown, twins, numberoftwinsaffected, numberoftwinsnotaffected, numberoftwinsunknown, pedigreeavailable, cataractod, cataractos, othersurgery, surgerycomments, opthalmologytrauma, opthalmologyinfection, actualvisiualrehabilitation, walkingage, articulationage, hearingproblems, hearingcharacter, hearingproblemslevel, communcationmode, hearingdevicead, hearingdeviceas, cochlearad, cochlearas,othersurgery,participationform,verification,dateofsignedform,actualsystemictreatment,actualvitamin,surgeries,traumas,systemicinfections', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'doctorpatients' => array(self::HAS_MANY, 'Doctorpatient', 'patientid'),
            'patientcenters' => array(self::HAS_MANY, 'Patientcenter', 'patientid'),
            
            'patientfamilies' => array(self::HAS_MANY, 'Patientfamily', 'patientid'),
            'patientfamilydetails' => array(self::HAS_MANY, 'Patientfamilydetails', 'patientid'),
            'patientgenetics' => array(self::HAS_MANY, 'Patientgenetics', 'patientid'),
            'patientopthalmologicaldatas' => array(self::HAS_MANY, 'Patientopthalmologicaldata', 'patientid'),
            'patientpedigreefiles' => array(self::HAS_MANY, 'Patientpedigreefile', 'patientid'),
            'patientstaticfiles' => array(self::HAS_MANY, 'Patientstaticfile', 'patientid'),
        );
    }
    
  
    
    public function getRelatedDoctorId()
    {
        $output = CHtml::listData($this->patientcenters,'centeridA','doctoridA');
        $returnString = "";
        foreach($output as $key=>$value)
        {
            $returnString.=$value;
        }
        
        return $returnString;
        
    }
    
    
    public function getRelatedCenters()
    {
        $output = CHtml::listData($this->patientcenters,'centeridA','doctoridA');
        $returnString = "";
        foreach($output as $key=>$value)
        {
            $returnString.=$key;
        }
        
        return $returnString;
    }
    

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'Patient ID',
            'systemid' => 'System id',
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
            'scotome' => 'Scotome perception',
            'nightblindnessage' => 'Night blindness',
            'phosphenes' => 'Phosphenes perception',
            'decreasedvisualacage' => 'Decreased visual acuity',
            'sensibilitytolight' => 'Sensibility to light',
            'sensibilitytolightage' => 'Sensibility to lightage',
            'clearvision' => 'Clear vision',
            'colourvisionage' => 'Colour vision',
            'sidevision' => 'Side vision',
            'sidevisionage' => 'Restriction of visual field',
            'readingdifficulties' => 'Reading difficulties',
            'nystagmus' => 'Reading difficulties',
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
            'cataractod' => 'Cataract OD',
            'cataractos' => 'Cataract OS',
            'othersurgery' => 'Other surgery (please give details)',
            'surgerycomments' => 'Comments',
            'opthalmologytrauma' => 'Trauma (Ophtalmology)',
            'opthalmologyinfection' => 'Infection (Ophtalmology)',
            'actualvisiualrehabilitation' => 'Actual visual rehabilitation',
            'walkingage' => 'Walking age',
            'articulationage' => 'Articulation age',
            'hearingproblems' => 'Hearing problems',
            'hearingcharacter' => 'Hearing character',
            'hearingproblemslevel' => 'Hearing problems level',
            'communcationmode' => 'Communcation mode',
            'hearingdevicead' => 'Hearing Device',
            'hearingdeviceas' => 'Cochlear Implant',
            'cochlearad' => 'AD',
            'cochlearas' => 'AS',
            'height'=>'Height',
            'weight'=>'Weight',
        );
    }

    
    protected function beforeSave() {
        $this->dateofbirth = date('d-m-Y', strtotime($this->dateofbirth));
        $this->establishedat = date('d-m-Y', strtotime($this->establishedat));
        return TRUE;
    }

    protected function afterFind() {
        $this->dateofbirth = date('d-m-Y', strtotime($this->dateofbirth));
        $this->establishedat = date('d-m-Y', strtotime($this->establishedat));
        return TRUE;
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
        $criteria->compare('dateofbirth', $this->dateofbirth, true);
        $criteria->compare('informedconsent', $this->informedconsent, true);
        $criteria->compare('confirmedmutation', $this->confirmedmutation, true);
        $criteria->compare('confirmedby', $this->confirmedby, true);
        $criteria->compare('diagnosis', $this->diagnosis);
        $criteria->compare('establishedat', $this->establishedat, true);
        $criteria->compare('diagnosiskeys', $this->diagnosiskeys, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('secondarydiagnosisexisting', $this->secondarydiagnosisexisting, true);
        $criteria->compare('secondarydiagnosiskeys', $this->secondarydiagnosiskeys, true);
        $criteria->compare('othercomments', $this->othercomments, true);
        $criteria->compare('scotome', $this->scotome);
        $criteria->compare('nightblindnessage', $this->nightblindnessage);
        $criteria->compare('phosphenes', $this->phosphenes);
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
        $criteria->compare('cataractod', $this->cataractod);
        $criteria->compare('cataractos', $this->cataractos);
        $criteria->compare('othersurgery', $this->othersurgery, true);
        $criteria->compare('surgerycomments', $this->surgerycomments, true);
        $criteria->compare('opthalmologytrauma', $this->opthalmologytrauma);
        $criteria->compare('opthalmologyinfection', $this->opthalmologyinfection);
        $criteria->compare('actualvisiualrehabilitation', $this->actualvisiualrehabilitation, true);
        $criteria->compare('walkingage', $this->walkingage);
        $criteria->compare('articulationage', $this->articulationage);
        $criteria->compare('hearingproblems', $this->hearingproblems);
        $criteria->compare('hearingcharacter', $this->hearingcharacter, true);
        $criteria->compare('hearingproblemslevel', $this->hearingproblemslevel, true);
        $criteria->compare('communcationmode', $this->communcationmode, true);
        $criteria->compare('hearingdevicead', $this->hearingdevicead);
        $criteria->compare('hearingdeviceas', $this->hearingdeviceas);
        $criteria->compare('cochlearad', $this->cochlearad);
        $criteria->compare('cochlearas', $this->cochlearas);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}