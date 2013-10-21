<?php
/* @var $this PatientfamilyController */
/* @var $model Patientfamily */

$this->breadcrumbs=array(
	'Patientfamilies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Patientfamily', 'url'=>array('index')),
	array('label'=>'Manage Patientfamily', 'url'=>array('admin')),
);
?>

<h1>Create Patientfamily</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>