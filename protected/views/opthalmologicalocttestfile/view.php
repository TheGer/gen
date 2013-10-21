<?php
/* @var $this OpthalmologicalocttestfileController */
/* @var $model Opthalmologicalocttestfile */

$this->breadcrumbs=array(
	'Opthalmologicalocttestfiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalocttestfile', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalocttestfile', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalocttestfile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalocttestfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalocttestfile', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalocttestfile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'path',
		'comment',
	),
)); ?>
