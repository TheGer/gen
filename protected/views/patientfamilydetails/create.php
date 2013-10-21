<?php
/* @var $this PatientfamilydetailsController */
/* @var $model Patientfamilydetails */

$this->breadcrumbs=array(
	'Patientfamilydetails'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Patientfamilydetails', 'url'=>array('index')),
	array('label'=>'Manage Patientfamilydetails', 'url'=>array('admin')),
);
?>

<h1>Create Patientfamilydetails</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>