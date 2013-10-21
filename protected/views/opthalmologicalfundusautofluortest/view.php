<?php
/* @var $this OpthalmologicalfundusautofluortestController */
/* @var $model Opthalmologicalfundusautofluortest */

$this->breadcrumbs=array(
	'Opthalmologicalfundusautofluortests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalfundusautofluortest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalfundusautofluortest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalfundusautofluortest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalfundusautofluortest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalfundusautofluortest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalfundusautofluortest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'examid',
		'comments',
		'eye',
		'device',
		'ring',
		'ringhorizontallength',
		'patch',
		'totalatropy',
	),
)); ?>
