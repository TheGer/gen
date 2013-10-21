<?php
/* @var $this OpthalmologicalmfergtestfileController */
/* @var $model Opthalmologicalmfergtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalmfergtestfiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfergtestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmfergtestfile', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalmfergtestfile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalmfergtestfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalmfergtestfile', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalmfergtestfile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'path',
		'comment',
	),
)); ?>
