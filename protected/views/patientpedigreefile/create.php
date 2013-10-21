<?php
/* @var $this PatientpedigreefileController */
/* @var $model Patientpedigreefile */

$this->breadcrumbs=array(
	'Patientpedigreefiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Patientpedigreefile', 'url'=>array('index')),
	array('label'=>'Manage Patientpedigreefile', 'url'=>array('admin')),
);
?>

<h1>Create Patientpedigreefile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>