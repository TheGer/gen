<?php
/* @var $this OpthalmologicalfsttestController */
/* @var $model Opthalmologicalfsttest */

$this->breadcrumbs=array(
	'Opthalmologicalfsttests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalfsttest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalfsttest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalfsttest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalfsttest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalfsttest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalfsttest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'examid',
		'performed',
		'whitestimulusthreshold',
		'whitestimuluserrorblanks',
		'whitestimuluserrormax',
		'bluestimulusthreshold',
		'bluestimuluserrorblanks',
		'bluestimuluserrormax',
		'redstimulusthreshold',
		'redstiumuluserrorblanks',
		'redstimuluserrormax',
		'eye',
	),
)); ?>
