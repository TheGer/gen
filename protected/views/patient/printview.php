<?php
/* @var $this PatientController */
/* @var $model Patient */
$this->layout ='//layouts/print';
$this->breadcrumbs=array(
	'Patients'=>array('index'),
	$model->id,
);

$this->menu=array(
        array('label'=>'List All Patients', 'url'=>array('index')),
        array('label'=>'Search Patients', 'url'=>array('search')),
        array('label'=>'Create new patient', 'url'=>array('/site/patientStep1')),
);
?>

<h1>View Patient #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'systemid',
		'gender',
		'placeofbirth',
		'dateofbirth',
		'informedconsent',
		'confirmedmutation',
		'confirmedby',
		'diagnosis',
		'establishedat',
		'diagnosiskeys',
		'description',
		'secondarydiagnosiskeys',
		'secondarydescription',
		'nightblindness',
		'nightblindnessage',
		'decreasedvisualac',
		'decreasedvisualacage',
		'sensibilitytolight',
		'sensibilitytolightage',
		'clearvision',
		'clearvisionage',
		'sidevision',
		'sidevisionage',
		'readingdifficulties',
		'readingdifficultiesage',
		'parentsorigin',
		'sporadicorfamily',
		'cosanguinity',
		'numberofaffectedfamilymembers',
		'children',
		'numberofchildrenaffected',
		'numberofchildrennonaffected',
		'numberofchildrenunknownstatus',
		'siblings',
		'numberofsiblingsaffected',
		'numberofsiblingsnotaffected',
		'numberofsiblingsunknown',
		'twins',
		'numberoftwinsaffected',
		'numberoftwinsnotaffected',
		'numberoftwinsunknown',
		'pedigreeavailable',
            'height',
		'weight',
		'participationform',
		'verification',
		'dateofsignedform',
		'actualsystemictreatment',
		'actualvitamin',
		'surgeries',
		'traumas',
		'systemicinfections',
            
	),
)); ?>
