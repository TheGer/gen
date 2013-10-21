<?php
/* @var $this PatientstaticfileController */
/* @var $model Patientstaticfile */

$this->breadcrumbs=array(
	'Patientstaticfiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Patientstaticfile', 'url'=>array('index')),
	array('label'=>'Create Patientstaticfile', 'url'=>array('create')),
	array('label'=>'Update Patientstaticfile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Patientstaticfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patientstaticfile', 'url'=>array('admin')),
);
?>

<h1>View Patientstaticfile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'patientid',
		'path',
		'comment',
	),
)); ?>
