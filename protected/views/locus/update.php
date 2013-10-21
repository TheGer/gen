<?php
/* @var $this LocusController */
/* @var $model Locus */

$this->breadcrumbs=array(
	'Locuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Locus', 'url'=>array('index')),
	array('label'=>'Create Locus', 'url'=>array('create')),
	array('label'=>'View Locus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Locus', 'url'=>array('admin')),
);
?>

<h1>Update Locus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>