<?php
/* @var $this OpthalmologicalmfpergtestController */
/* @var $model Opthalmologicalmfpergtest */

$this->breadcrumbs=array(
	'Opthalmologicalmfpergtests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfpergtest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmfpergtest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalmfpergtest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalmfpergtest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalmfpergtest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalmfpergtest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'examid',
		'performed',
		'eye',
		'comments',
		'device',
	),
)); ?>
