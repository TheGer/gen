<?php
/* @var $this PatientfamilyController */
/* @var $model Patientfamily */

$this->breadcrumbs=array(
	'Patientfamilies'=>array('index'),
	$model->patient_familyid,
);

$this->menu=array(
	array('label'=>'List Patientfamily', 'url'=>array('index')),
	array('label'=>'Create Patientfamily', 'url'=>array('create')),
	array('label'=>'Update Patientfamily', 'url'=>array('update', 'id'=>$model->patient_familyid)),
	array('label'=>'Delete Patientfamily', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->patient_familyid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patientfamily', 'url'=>array('admin')),
);
?>

<h1>View Patientfamily #<?php echo $model->patient_familyid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'patient_familyid',
		'patientid',
		'familyid',
		'comments',
	),
)); ?>
