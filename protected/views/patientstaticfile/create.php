<?php
/* @var $this PatientstaticfileController */
/* @var $model Patientstaticfile */

$this->breadcrumbs=array(
	'Patientstaticfiles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Patientstaticfile', 'url'=>array('index')),
	array('label'=>'Manage Patientstaticfile', 'url'=>array('admin')),
);
?>

<h1>Create Patientstaticfile</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>