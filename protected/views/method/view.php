<?php
/* @var $this MethodController */
/* @var $model Method */

$this->breadcrumbs=array(
	'Methods'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Method', 'url'=>array('index')),
	array('label'=>'Create Method', 'url'=>array('create')),
	array('label'=>'Update Method', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Method', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Method', 'url'=>array('admin')),
);
?>

<h1>View Method #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'methodname',
	),
)); ?>
