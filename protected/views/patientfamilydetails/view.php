<?php
/* @var $this PatientfamilydetailsController */
/* @var $model Patientfamilydetails */

$this->breadcrumbs=array(
	'Patientfamilydetails'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Patientfamilydetails', 'url'=>array('index')),
	array('label'=>'Create Patientfamilydetails', 'url'=>array('create')),
	array('label'=>'Update Patientfamilydetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Patientfamilydetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patientfamilydetails', 'url'=>array('admin')),
);
?>

<h1>View Patientfamilydetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'patientid',
		'parentsorigin',
		'sporadicorfamily',
		'consanguinity',
		'numberofaffectedfamily',
		'children',
		'numberofchildrenaffected',
		'numberofchildrennonaffected',
		'numberofchildrenunknownstatus',
		'siblings',
		'numberofsiblingsaffected',
		'numberofsiblingsnonaffected',
		'numberofsiblingsunknownstatus',
		'twins',
		'numberoftwinsaffected',
		'numberoftwinsnotaffected',
		'numberoftwinsunknownstatus',
		'pedigreeavailable',
	),
)); ?>
