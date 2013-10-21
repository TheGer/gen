<?php
/* @var $this OpthalmologicalmicroperimetrytestfileController */
/* @var $model Opthalmologicalmicroperimetrytestfile */

$this->breadcrumbs=array(
	'Opthalmologicalmicroperimetrytestfiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmicroperimetrytestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmicroperimetrytestfile', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalmicroperimetrytestfile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalmicroperimetrytestfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalmicroperimetrytestfile', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalmicroperimetrytestfile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'path',
		'comment',
	),
)); ?>
