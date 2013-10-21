<?php
/* @var $this OpthalmologicaltonometrytestController */
/* @var $model Opthalmologicaltonometrytest */

$this->breadcrumbs=array(
	'Opthalmologicaltonometrytests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicaltonometrytest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicaltonometrytest', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicaltonometrytest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicaltonometrytest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicaltonometrytest', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicaltonometrytest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'eye',
		'vocalaudiogram',
		'vocalvpp40',
		'vocalvmf40',
		'vocalvff40',
		'tonalaudiogram',
		'tonal250',
		'tonal500',
		'tonal1000',
		'tonal2000',
		'tonal3000',
		'tonal4000',
		'tonal6000',
		'tonal8000',
		'otospontanic',
		'otoprovoced',
		'otodistortionproducts',
	),
)); ?>
