<?php
/* @var $this PatientpedigreefileController */
/* @var $model Patientpedigreefile */

$this->breadcrumbs=array(
	'Patientpedigreefiles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patientpedigreefile', 'url'=>array('index')),
	array('label'=>'Create Patientpedigreefile', 'url'=>array('create')),
	array('label'=>'View Patientpedigreefile', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Patientpedigreefile', 'url'=>array('admin')),
);
?>

<h1>Update Patientpedigreefile <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>