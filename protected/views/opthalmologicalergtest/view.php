<?php
/* @var $this OpthalmologicalergtestController */
/* @var $model Opthalmologicalergtest */

$this->breadcrumbs=array(
	'Opthalmologicalergtests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalergtest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalergtest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalergtest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalergtest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalergtest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalergtest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'examid',
		'comments',
		'device',
		'comments2',
		'eye',
		'other',
		'notperformedcomment',
		'Skotopicamplitudeawave',
		'Skotopicamplitudebwave',
		'Photopicamplitudeawave',
		'Photopicamplitudebwave',
	),
)); ?>
