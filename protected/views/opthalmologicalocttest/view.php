<?php
/* @var $this OpthalmologicalocttestController */
/* @var $model Opthalmologicalocttest */

$this->breadcrumbs=array(
	'Opthalmologicalocttests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalocttest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalocttest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalocttest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalocttest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalocttest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalocttest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'examid',
		'eye',
		'notperformedcomments',
		'device',
		'fovealthickness',
		'othercomments',
		'centralmaculathickness',
		'glosis',
		'epiretinalmembrane',
		'maculahole',
		'maculaedema',
		'cysticchanges',
		'preservedisos',
		'isoshorizontallength',
	),
)); ?>
