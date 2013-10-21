<?php
/* @var $this Opthalmologicalcolorvisiontest2Controller */
/* @var $model Opthalmologicalcolorvisiontest2 */

$this->breadcrumbs=array(
	'Opthalmologicalcolorvisiontest2s'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthalmologicalcolorvisiontest2', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalcolorvisiontest2', 'url'=>array('create')),
	array('label'=>'Update Opthalmologicalcolorvisiontest2', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthalmologicalcolorvisiontest2', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthalmologicalcolorvisiontest2', 'url'=>array('admin')),
);
?>

<h1>View Opthalmologicalcolorvisiontest2 #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'eye',
		'performed',
		'type',
		'd15desaturatedorder',
		'd15saturatedorder',
		'learesult',
		'hue28performed',
	),
)); ?>
