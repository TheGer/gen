<?php
/* @var $this OpthalmologicalvisualacuitytestController */
/* @var $model Opthalmologicalvisualacuitytest */

$this->breadcrumbs=array(
	'Opthalmologicalvisualacuitytests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalvisualacuitytest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalvisualacuitytest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalvisualacuitytest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalvisualacuitytest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalvisualacuitytest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalvisualacuitytest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'eye',
		'type',
		'etdrsnumberofletters',
		'learesult',
		'fingercount',
		'handmovement',
		'lightperception',
	),
)); ?>
