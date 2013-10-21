<?php
/* @var $this PatientcenterController */
/* @var $model Patientcenter */

$this->breadcrumbs=array(
	'Patientcenters'=>array('index'),
	$model->patientid=>array('view','id'=>$model->patientid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patientcenter', 'url'=>array('index')),
	array('label'=>'Create Patientcenter', 'url'=>array('create')),
	array('label'=>'View Patientcenter', 'url'=>array('view', 'id'=>$model->patientid)),
	array('label'=>'Manage Patientcenter', 'url'=>array('admin')),
);
?>

<h1>Update Patientcenter <?php echo $model->patientid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>