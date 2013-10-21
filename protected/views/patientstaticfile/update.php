<?php
/* @var $this PatientstaticfileController */
/* @var $model Patientstaticfile */

$this->breadcrumbs=array(
	'Patientstaticfiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patientstaticfile', 'url'=>array('index')),
	array('label'=>'Create Patientstaticfile', 'url'=>array('create')),
	array('label'=>'View Patientstaticfile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Patientstaticfile', 'url'=>array('admin')),
);
?>

<h1>Update Patientstaticfile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>