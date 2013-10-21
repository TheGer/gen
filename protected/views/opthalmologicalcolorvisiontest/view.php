<?php
/* @var $this OpthalmologicalcolorvisiontestController */
/* @var $model Opthalmologicalcolorvisiontest */

$this->breadcrumbs=array(
	'Opthalmologicalcolorvisiontests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalcolorvisiontest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalcolorvisiontest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalcolorvisiontest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalcolorvisiontest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalcolorvisiontest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalcolorvisiontest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'eye',
		'performed',
		'type',
		'd15desaturatedorder',
		'd15saturatedorder',
		'learesult',
		'hue28performed',
	),
)); ?>
