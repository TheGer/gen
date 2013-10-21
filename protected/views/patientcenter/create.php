<?php
/* @var $this PatientcenterController */
/* @var $model Patientcenter */

$this->breadcrumbs=array(
	'Patientcenters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Patientcenter', 'url'=>array('index')),
	array('label'=>'Manage Patientcenter', 'url'=>array('admin')),
);
?>

<h1>Create Patientcenter</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>