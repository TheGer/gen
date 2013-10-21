<?php
/* @var $this OpthalmologicalergtestController */
/* @var $model Opthalmologicalergtest */

$this->breadcrumbs=array(
	'Opthalmologicalergtests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalergtest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalergtest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalergtest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalergtest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalergtest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>