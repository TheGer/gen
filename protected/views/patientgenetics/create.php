<?php
/* @var $this PatientgeneticsController */
/* @var $model Patientgenetics */

$this->breadcrumbs=array(
	'Patientgenetics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Patientgenetics', 'url'=>array('index')),
	array('label'=>'Manage Patientgenetics', 'url'=>array('admin')),
);
?>

<h1>Create Patientgenetics</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>