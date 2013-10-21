<?php
/* @var $this PatientgeneticsController */
/* @var $model Patientgenetics */

$this->breadcrumbs=array(
	'Patientgenetics'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Patientgenetics', 'url'=>array('index')),
	array('label'=>'Create Patientgenetics', 'url'=>array('create')),
	array('label'=>'View Patientgenetics', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Patientgenetics', 'url'=>array('admin')),
);
?>

<h1>Update Patientgenetics <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>