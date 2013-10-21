<?php
/* @var $this OpthalmologicalmfpergtestController */
/* @var $model Opthalmologicalmfpergtest */

$this->breadcrumbs=array(
	'Opthalmologicalmfpergtests'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfpergtest', 'url'=>array('index')),
	array('label'=>'Create Opthalmologicalmfpergtest', 'url'=>array('create')),
	array('label'=>'View Opthalmologicalmfpergtest', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Opthalmologicalmfpergtest', 'url'=>array('admin')),
);
?>

<h1>Update Opthalmologicalmfpergtest <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>