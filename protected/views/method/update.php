<?php
/* @var $this MethodController */
/* @var $model Method */

$this->breadcrumbs=array(
	'Methods'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Method', 'url'=>array('index')),
	array('label'=>'Create Method', 'url'=>array('create')),
	array('label'=>'View Method', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Method', 'url'=>array('admin')),
);
?>

<h1>Update Method <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>