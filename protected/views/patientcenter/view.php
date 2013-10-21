<?php
/* @var $this PatientcenterController */
/* @var $model Patientcenter */

$this->breadcrumbs=array(
	'Patientcenters'=>array('index'),
	$model->patientid,
);

$this->menu=array(
	array('label'=>'List Patientcenter', 'url'=>array('index')),
	array('label'=>'Create Patientcenter', 'url'=>array('create')),
	array('label'=>'Update Patientcenter', 'url'=>array('update', 'id'=>$model->patientid)),
	array('label'=>'Delete Patientcenter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->patientid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patientcenter', 'url'=>array('admin')),
);
?>

<h1>View Patientcenter #<?php echo $model->patientid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'patientcenterid',
		'centeridA',
		'centeridB',
		'centeridC',
		'doctoridA',
		'doctoridB',
		'doctoridC',
		'systemid',
		'patientid',
	),
)); ?>
