<?php
/* @var $this PatientopthalmologicaldataController */
/* @var $model Patientopthalmologicaldata */

$this->breadcrumbs=array(
	'Patients'=>array('patient/index'),
	$patientid=>array('patient/patientStep2/'.$patientid),
        'Create Phenotype Data',
);

$this->menu=array(
	array('label'=>'List Phenotype Data', 'url'=>array('indexofpatient','patientid'=>$patientid)),
	array('label'=>'Manage Phenotype Data', 'url'=>array('admin','patientid'=>$patientid)),
);
?>

<h1>Create Phenotype Data</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>