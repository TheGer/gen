<?php
/* @var $this PatientfamilydetailsController */
/* @var $model Patientfamilydetails */

$this->breadcrumbs=array(
	'Patientfamilydetails'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patientfamilydetails', 'url'=>array('index')),
	array('label'=>'Create Patientfamilydetails', 'url'=>array('create')),
	array('label'=>'View Patientfamilydetails', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Patientfamilydetails', 'url'=>array('admin')),
);
?>

<h1>Update Patientfamilydetails <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>