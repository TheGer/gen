<?php
/* @var $this PatientopthalmologicaldataController */
/* @var $model Patientopthalmologicaldata */

$this->breadcrumbs=array(
	'Patientopthalmologicaldatas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patientopthalmologicaldata', 'url'=>array('index')),
	array('label'=>'Create Patientopthalmologicaldata', 'url'=>array('create')),
	array('label'=>'View Patientopthalmologicaldata', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Patientopthalmologicaldata', 'url'=>array('admin')),
);
?>

<h1>Update Patientopthalmologicaldata <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>