<?php
/* @var $this OpthalmologicalmfergtestController */
/* @var $model Opthalmologicalmfergtest */

$this->breadcrumbs=array(
	'Opthalmologicalmfergtests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfergtest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmfergtest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalmfergtest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalmfergtest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalmfergtest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>