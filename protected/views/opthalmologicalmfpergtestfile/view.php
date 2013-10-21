<?php
/* @var $this OpthalmologicalmfpergtestfileController */
/* @var $model Opthalmologicalmfpergtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalmfpergtestfiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfpergtestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmfpergtestfile', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalmfpergtestfile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalmfpergtestfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalmfpergtestfile', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalmfpergtestfile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'path',
		'comment',
	),
)); ?>
