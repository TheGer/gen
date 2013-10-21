<?php
/* @var $this OpthalmologicalmfergtestController */
/* @var $model Opthalmologicalmfergtest */

$this->breadcrumbs=array(
	'Opthalmologicalmfergtests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfergtest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmfergtest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalmfergtest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalmfergtest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalmfergtest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalmfergtest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'examid',
		'eye',
		'nonperformedcomments',
		'device',
		'pupilsizeendoftest',
		'other',
		'Concentricring1',
		'Concentricring2',
		'Concentricring3',
	),
)); ?>
