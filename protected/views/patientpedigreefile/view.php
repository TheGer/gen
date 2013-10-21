<?php
/* @var $this PatientpedigreefileController */
/* @var $model Patientpedigreefile */

$this->breadcrumbs=array(
	'Patientpedigreefiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Patientpedigreefile', 'url'=>array('index')),
	array('label'=>'Create Patientpedigreefile', 'url'=>array('create')),
	array('label'=>'Update Patientpedigreefile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Patientpedigreefile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patientpedigreefile', 'url'=>array('admin')),
);
?>

<h1>View Patientpedigreefile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'patientid',
		'comment',
		'filepath',
	),
)); ?>
