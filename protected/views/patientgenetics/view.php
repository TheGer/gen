<?php
/* @var $this PatientgeneticsController */
/* @var $model Patientgenetics */

$this->breadcrumbs=array(
	'Patientgenetics'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Patientgenetics', 'url'=>array('index')),
	array('label'=>'Create Patientgenetics', 'url'=>array('create')),
	array('label'=>'Update Patientgenetics', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Patientgenetics', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patientgenetics', 'url'=>array('admin')),
);
?>

<h1>View Patientgenetics #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'patientid',
		'modeofinheritance',
		'levelofcertainty',
		'allellestatus',
		'dnasample',
		'screenedformutations',
		'dateofscreening',
		'responsiblemutation',
	),
)); ?>
