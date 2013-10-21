<?php
/* @var $this OpthalmologicalmfergtestController */
/* @var $model Opthalmologicalmfergtest */

$this->breadcrumbs=array(
	'Opthalmologicalmfergtests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Opthalmologicalmfergtest', 'url'=>array('index')),
	array('label'=>'Manage Opthalmologicalmfergtest', 'url'=>array('admin')),
);
?>

<h1>Create Opthalmologicalmfergtest</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>