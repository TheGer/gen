<?php
/* @var $this LocusController */
/* @var $model Locus */

$this->breadcrumbs=array(
	'Locuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Locus', 'url'=>array('index')),
	array('label'=>'Create Locus', 'url'=>array('create')),
	array('label'=>'Update Locus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Locus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Locus', 'url'=>array('admin')),
);
?>

<h1>View Locus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'locusname',
	),
)); ?>
