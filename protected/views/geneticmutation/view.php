<?php
/* @var $this GeneticmutationController */
/* @var $model Geneticmutation */

$this->breadcrumbs=array(
	'Geneticmutations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Geneticmutation', 'url'=>array('index')),
	array('label'=>'Create Geneticmutation', 'url'=>array('create')),
	array('label'=>'Update Geneticmutation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Geneticmutation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Geneticmutation', 'url'=>array('admin')),
);
?>

<h1>View Geneticmutation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'patientid',
		'patientgeneid',
		'patientlocusid',
		'firstallel',
		'firstallelmutation',
		'secondallel',
		'secondallelmutation',
		'thirdallel',
		'thirdallelmutation',
		'fourthallel',
		'fourthallelmutation',
		'mutationtype',
	),
)); ?>
