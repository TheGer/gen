<?php
/* @var $this OpthalmologicalmicroperimetrytestController */
/* @var $model Opthalmologicalmicroperimetrytest */

$this->breadcrumbs=array(
	'Opthalmologicalmicroperimetrytests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmicroperimetrytest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmicroperimetrytest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalmicroperimetrytest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalmicroperimetrytest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalmicroperimetrytest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalmicroperimetrytest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'examid',
		'performed',
		'comments',
		'eye',
	),
)); ?>
