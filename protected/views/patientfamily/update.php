<?php
/* @var $this PatientfamilyController */
/* @var $model Patientfamily */

$this->breadcrumbs=array(
	'Patientfamilies'=>array('index'),
	$model->patient_familyid=>array('view','id'=>$model->patient_familyid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patientfamily', 'url'=>array('index')),
	array('label'=>'Create Patientfamily', 'url'=>array('create')),
	array('label'=>'View Patientfamily', 'url'=>array('view', 'id'=>$model->patient_familyid)),
	array('label'=>'Manage Patientfamily', 'url'=>array('admin')),
);
?>

<h1>Update Patientfamily <?php echo $model->patient_familyid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>