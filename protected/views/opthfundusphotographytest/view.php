<?php
/* @var $this OpthfundusphotographytestController */
/* @var $model Opthfundusphotographytest */

$this->breadcrumbs=array(
	'Opthfundusphotographytests'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthfundusphotographytest', 'url'=>array('index')),
	array('label'=>'Create Opthfundusphotographytest', 'url'=>array('create')),
	array('label'=>'Update Opthfundusphotographytest', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthfundusphotographytest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthfundusphotographytest', 'url'=>array('admin')),
);
?>

<h1>View Opthfundusphotographytest #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'examid',
		'CDratio',
		'comments',
		'eye',
	),
)); ?>
