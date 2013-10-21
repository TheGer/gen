<?php
/* @var $this OpthalmologicalvisualfieldtestfileController */
/* @var $model Opthalmologicalvisualfieldtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalvisualfieldtestfiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalvisualfieldtestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalvisualfieldtestfile', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalvisualfieldtestfile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalvisualfieldtestfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalvisualfieldtestfile', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalvisualfieldtestfile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'path',
		'comment',
		'type',
	),
)); ?>
