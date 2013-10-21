<?php
/* @var $this OpthfundusautofluortestfileController */
/* @var $model Opthfundusautofluortestfile */

$this->breadcrumbs=array(
	'Opthfundusautofluortestfiles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Opthfundusautofluortestfile', 'url'=>array('index')),
	array('label'=>'Create Opthfundusautofluortestfile', 'url'=>array('create')),
	array('label'=>'Update Opthfundusautofluortestfile', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Opthfundusautofluortestfile', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Opthfundusautofluortestfile', 'url'=>array('admin')),
);
?>

<h1>View Opthfundusautofluortestfile #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'testid',
		'path',
		'comment',
	),
)); ?>
