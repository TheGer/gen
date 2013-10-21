<?php
/* @var $this GeneticscreenedgeneController */
/* @var $model Geneticscreenedgene */

$this->breadcrumbs=array(
	'Geneticscreenedgenes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Geneticscreenedgene', 'url'=>array('index')),
	array('label'=>'Create Geneticscreenedgene', 'url'=>array('create')),
	array('label'=>'Update Geneticscreenedgene', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Geneticscreenedgene', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Geneticscreenedgene', 'url'=>array('admin')),
);
?>

<h1>View Geneticscreenedgene #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'patientegeneid',
		'testingmethodid',
		'excluded',
		'comment',
		'patientid',
	),
)); ?>
