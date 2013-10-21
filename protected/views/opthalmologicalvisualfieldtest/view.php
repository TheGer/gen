<?php
/* @var $this OpthalmologicalvisualfieldtestController */
/* @var $model Opthalmologicalvisualfieldtest */

$this->breadcrumbs=array(
	'Opthalmologicalvisualfieldtests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalvisualfieldtest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalvisualfieldtest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalvisualfieldtest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalvisualfieldtest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalvisualfieldtest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalvisualfieldtest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'examid',
		'performed',
		'device',
		'lostarea',
		'preservedarea',
		'comments',
		'type',
		'staticperformed',
		'staticdevice',
		'staticLUE',
		'staticcomments',
		'eye',
	),
)); ?>
