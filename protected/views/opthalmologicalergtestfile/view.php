<?php
/* @var $this OpthalmologicalergtestfileController */
/* @var $model Opthalmologicalergtestfile */

$this->breadcrumbs=array(
	'Opthalmologicalergtestfiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalergtestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalergtestfile', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalergtestfile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalergtestfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalergtestfile', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalergtestfile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'path',
		'comment',
	),
)); ?>
